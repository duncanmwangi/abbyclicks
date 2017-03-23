<?php

namespace App\Http\Controllers\advertiser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\Advertiser;
use App\models\Campaign;
use App\Http\Requests\advertiser\CampaignRequest;

class CampaignsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns =  Advertiser::currentAdvertiser()->campaigns()->paginate(10);
        return view('advertiser.campaigns.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('advertiser.campaigns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CampaignRequest $request)
    {
        $campaign = new Campaign();
        $campaign->name = request('name');
        $campaign->description = request('description');
        $campaign->status = 'ACTIVE';
        Advertiser::currentAdvertiser()->campaigns()->save($campaign);
        return redirect()->route('advertiser.campaigns.index')->with('success','A new Campaign was successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        if(!$this->checkCampaignOwnership($campaign)) 
            return redirect()->route('advertiser.campaigns.index')
                   ->with('warning','The campaign does not belong to your account.');
                   
        return view('advertiser.campaigns.show', compact('campaign'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        if(!$this->checkCampaignOwnership($campaign)) 
            return redirect()->route('advertiser.campaigns.index')
                   ->with('warning','The campaign does not belong to your account.');

        return view('advertiser.campaigns.edit',compact('campaign'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CampaignRequest $request, Campaign $campaign)
    {
        if(!$this->checkCampaignOwnership($campaign)) 
            return redirect()->route('advertiser.campaigns.index')
                   ->with('warning','The campaign does not belong to your account.');

        $campaign->name = request('name');
        $campaign->description = request('description');
        $campaign->save();

        return redirect()->route('advertiser.campaigns.edit',$campaign->id)->with('success','Campaign has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        if(!$this->checkCampaignOwnership($campaign)) 
            return redirect()->route('advertiser.campaigns.index')
                   ->with('warning','The campaign does not belong to your account.');

        $campaign->delete();
        return redirect()->route('advertiser.campaigns.index')->with('success','Campaign has been deleted successfully');
    }

    public function checkCampaignOwnership($campaign){
        if(Advertiser::currentAdvertiser()->id != $campaign->advertiser_id){
            return false;
        }
        return true;
    }

    
}
