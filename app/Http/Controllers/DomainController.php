<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDomainRequest;
use App\Models\Domain;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Iodev\Whois\Exceptions\ConnectionException;
use Iodev\Whois\Exceptions\ServerMismatchException;
use Iodev\Whois\Exceptions\WhoisException;
use Iodev\Whois\Factory;


class DomainController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('views.domain.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('views.domain.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDomainRequest $request)
    {
        $removeChar = ["https://", "http://", "/"];
        $domainFormatted = str_replace($removeChar, "", $request->validated()['domain']);
        try {
            $whois = Factory::get()->createWhois();
            $info = $whois->loadDomainInfo($domainFormatted)->getData();

            if (!$info) {
                return Redirect::back()->withErrors(["Null if domain available"]);
            }

            $domain = new Domain;
            $domain->domain = $domainFormatted;
            $domain->status = $info['states'][0];
            $domain->save();

            $domain->users()->attach(Auth::id());
        } catch (ConnectionException $e) {
            return Redirect::back()->withErrors(["Disconnect or connection timeout"]);
        } catch (ServerMismatchException $e) {
            return Redirect::back()->withErrors(["TLD server ({$domainFormatted}) not found in current server hosts"]);
        } catch (WhoisException $e) {
            return Redirect::back()->withErrors(["Whois server responded with error '{$e->getMessage()}'"]);
        }

        return redirect()->route('domains.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
