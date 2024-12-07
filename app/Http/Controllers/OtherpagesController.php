<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\BannerStats;
use App\Models\Contact;
use App\Models\Member;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class OtherpagesController extends Controller
{
    // members function here
    public function showMember()
    {
        $formData = [
            'method' => 'POST',
            'url' => route('members.create'),
            'type' => 'show'
        ];
        $executiveMembers = Member::where('member_type', 'executive_board')->get();
        $generalMembers = Member::where('member_type', 'general_body')->get();
        return view('other.members')->with('formData', $formData)->with('executiveMembers', $executiveMembers)->with('generalMembers', $generalMembers);
    }
    public function createMember(MemberRequest $request){

        $member = new Member();
        $member->member_name = $request->member_name;
        $member->member_occupation = $request->member_occupation;
        $member->member_designation = $request->member_designation;
        $member->member_type = $request->member_type;
        $member->save();
        $request->session()->flash('success', 'Member created successfully');
        return redirect()->route('members.show');
    }
    public function editMember($id)
    {
        $formData = [
            'method' => 'POST',
            'url' => route('members.update', $id),
            'type' => 'edit'
        ];
        $executiveMembers = Member::where('member_type', 'executive_board')->get();
        $generalMembers = Member::where('member_type', 'general_body')->get();
        $member = Member::find($id);
        return view('other.members')->with('formData', $formData)->with('member', $member)->with('executiveMembers', $executiveMembers)->with('generalMembers', $generalMembers);
    }
    public function updateMember(MemberRequest $request, $id){
        $member = Member::find($id);
        $member->member_name = $request->member_name;
        $member->member_occupation = $request->member_occupation;
        $member->member_designation = $request->member_designation;
        $member->member_type = $request->member_type;
        $member->save();
        $request->session()->flash('success', 'Member updated successfully');
        return redirect()->route('members.show');
    }
    public function deleteMember($id){
        $member = Member::find($id);
        $member->delete();
        session()->flash('success', 'Member Deleted successfully');
        return redirect()->route('members.show');
    }


    // socialLink function here
    public function showSocialLinks()
    {
        $formData = [
            'method' => 'POST',
            'url' => route('social-link.create'),
            'type' => 'show'
        ];
        $socialLinks = SocialLink::all();
        return view('contact.social-links')->with('formData', $formData)->with('socialLinks', $socialLinks);
    }
    public function createSocialLinks(Request $request){

        $socialLink = new SocialLink();
        $socialLink->icon = $request->icon;
        $socialLink->link = $request->link;
        $socialLink->save();
        $request->session()->flash('success', 'Social Link created successfully');
        return redirect()->route('social-link.show');
    }
    public function editSocialLinks($id)
    {
        $formData = [
            'method' => 'POST',
            'url' => route('social-link.update', $id),
            'type' => 'edit'
        ];
        $socialLinks = SocialLink::all();
        $socialLink = SocialLink::find($id);
        return view('contact.social-links')->with('formData', $formData)->with('socialLink', $socialLink)->with('socialLinks', $socialLinks);
    }
    public function updateSocialLinks(Request $request, $id){
        $socialLink = SocialLink::find($id);
        $socialLink->icon = $request->icon;
        $socialLink->link = $request->link;
        $socialLink->save();
        $request->session()->flash('success', 'Social Link updated successfully');
        return redirect()->route('social-link.show');
    }
    public function deleteSocialLinks($id){
        $socialLink = SocialLink::find($id);
        $socialLink->delete();
        session()->flash('success', 'Social Link Deleted successfully');
        return redirect()->route('social-link.show');
    }


    //contact page function here
    public function showContact()
    {
        $formData = [
            'method' => 'POST',
            'url' => route('contact.create'),
            'type' => 'show'
        ];
        $allContacts = Contact::all();
        return view('contact.contact-page')->with('formData', $formData)->with('allContacts', $allContacts);
    }
    public function createContact(Request $request){
        $request->validate([
            'office_name' => 'required',
        ]);

        $contact = new Contact();
        $contact->office_name = $request->office_name;
        $contact->office_location = $request->office_location;
        $contact->office_map = $request->office_map;
        $contact->office_phone = $request->office_phone;
        $contact->office_email = $request->office_email;
        $contact->save();
        $request->session()->flash('success', 'Contact created successfully');
        return redirect()->route('contact.show');
    }
    public function editContact($id)
    {
        $formData = [
            'method' => 'POST',
            'url' => route('contact.update', $id),
            'type' => 'edit'
        ];
        $allContacts = Contact::all();
        $contact = Contact::find($id);
        return view('contact.contact-page')->with('formData', $formData)->with('contact', $contact)->with('allContacts', $allContacts);
    }
    public function updateContact(Request $request, $id){
        $request->validate([
            'office_name' => 'required',
        ]);

        $contact = Contact::find($id);
        $contact->office_name = $request->office_name;
        $contact->office_location = $request->office_location;
        $contact->office_map = $request->office_map;
        $contact->office_phone = $request->office_phone;
        $contact->office_email = $request->office_email;
        $contact->save();
        $request->session()->flash('success', 'Contact updated successfully');
        return redirect()->route('contact.show');
    }
    public function deleteContact($id){
        $contact = Contact::find($id);
        $contact->delete();
        session()->flash('success', 'Contact Deleted successfully');
        return redirect()->route('contact.show');
    }

    //banner stats function here
    public function showbannerStats()
    {
        $formData = [
            'method' => 'POST',
            'url' => route('bannerStats.create'),
            'type' => 'show'
        ];
        $bannerStats = BannerStats::all();
        return view('other.banner-stats')->with('formData', $formData)->with('bannerStats', $bannerStats);
    }
    public function createbannerStats(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $bannerStats = new BannerStats();
        $bannerStats->title = $request->title;
        $bannerStats->description = $request->description;
        $bannerStats->status = 0;
        $bannerStats->save();
        $request->session()->flash('success', 'Banner Stats created successfully');
        return redirect()->route('bannerStats.show');
    }
    public function editbannerStats($id)
    {
        $formData = [
            'method' => 'POST',
            'url' => route('bannerStats.update', $id),
            'type' => 'edit'
        ];
        $bannerStats = BannerStats::all();
        $bannerStat = BannerStats::find($id);
        return view('other.banner-stats')->with('formData', $formData)->with('bannerStat', $bannerStat)->with('bannerStats', $bannerStats);
    }
    public function updatebannerStats(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $bannerStats = BannerStats::find($id);
        $bannerStats->title = $request->title;
        $bannerStats->description = $request->description;
        $bannerStats->save();
        $request->session()->flash('success', 'Banner Stats updated successfully');
        return redirect()->route('bannerStats.show');
    }
    public function deletebannerStats($id){
        $activeBannerStats = BannerStats::where('status', 1)->get();
        if (count($activeBannerStats) <=6) {
            session()->flash('error', 'Minimum 6 banner stats should be active');
            return redirect()->route('bannerStats.show');
        } else {
            $bannerStats = BannerStats::find($id);
            $bannerStats->delete();
            session()->flash('success', 'Banner Stats Deleted successfully');
            return redirect()->route('bannerStats.show');
        }
    }
    public function changeStatus($id)
    {
        $targetBanner = BannerStats::findOrFail($id);
        $activeBannerStats = BannerStats::where('status', 1)->get();
        if (count($activeBannerStats) > 6 && $targetBanner->status == 0) {
            session()->flash('error', 'Maximum 6 banner stats can be active');
            return redirect()->route('bannerStats.show');
        }
        $targetBanner->status = !$targetBanner->status;
        $targetBanner->save();

        session()->flash('success', 'Banner status changed successfully');
        return redirect()->route('bannerStats.show');
    }

}
