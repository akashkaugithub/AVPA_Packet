<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PrivacyPolicyTermsCondition;
use App\Models\Gallery;
use App\Models\NewsRoom;
use App\Models\QuickLink;
use App\Models\Address;
use App\Models\Service;
use App\Models\GetInTouch;
use App\Models\Industries;
use App\Models\Testimonial;
use App\Models\TrustedProject;
use App\Models\Aboutus;

class AdminController extends Controller
{

    // Admin Login 
    public function login(Request $request)
    {
        $request->validate([
            'email_or_phone' => 'required',
            'password' => 'required',
        ]);

        $remember = $request->has('remember');

        $credentials = [
            'email' => $request->email_or_phone,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($credentials, $remember)) {
            return response()->json([
                'status' => true,
                'message' => 'Login successful',
                'redirect' => route('admin.teams.management') // Update this route
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'Invalid credentials'
        ], 401);
    }

    // Teams Management //
    public function TeamsManagement()
    {
        $teams = User::where('delete_status', 0)->get();
        return view('admin.teams-management', compact('teams'));
    }

    public function storeTeams(Request $request)
    {
        $data = $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'description' => 'nullable|string',
            'role' => 'required|in:0,1',
        ]);

        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('images', 'public');
        //     $data['image'] = $imagePath;
        // }
        
        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/teams'), $imageName);
        $data['image'] = $imageName;
    }

        $user = User::create($data);

        return response()->json(['success' => 'Data saved successfully!', 'user' => $user]);
    }

    // public function updateTeams(Request $request, $id)
    // {
    //     $data = $request->validate([
    //         'name' => 'required|string',
    //         'email' => 'required|email',
    //         'phone' => 'required|string',
    //         'description' => 'nullable|string',
    //     ]);

    //     $user = User::findOrFail($id);
    //     $user->update($data);

    //     return response()->json(['success' => 'Data updated successfully!', 'user' => $user]);
    // }
    
    public function updateTeams(Request $request, $id)
{
    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png',
    ]);

    $user = User::findOrFail($id);

    // ✅ Handle image upload
    if ($request->hasFile('image')) {
        // Purani image delete kar do agar exist karti hai
        $oldPath = public_path('uploads/teams/' . $user->image);
        if ($user->image && file_exists($oldPath)) {
            unlink($oldPath);
        }

        // Nayi image upload
        $image = $request->file('image');
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/teams'), $imageName);
        $data['image'] = $imageName;
    }

    $user->update($data);

    return response()->json([
        'success' => 'Data updated successfully!',
        'user' => $user
    ]);
}


    public function getUser($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }


    // Update destroy method to set delete_status to 1
    public function destroyTeams($id)
    {
        $user = User::findOrFail($id);
        $user->delete_status = 1;  // Mark as deleted (soft delete)
        $user->save();

        return response()->json(['success' => 'User deleted successfully!']);
    }

    // Update block/unblock method to set block_status
    public function changeStatusTeams($id, $status)
    {
        $user = User::findOrFail($id);

        if ($status == 'block') {
            $user->block_status = 1;  // Mark as blocked
        } else {
            $user->block_status = 0;  // Mark as active
        }

        $user->save();

        return response()->json(['success' => $status == 'block' ? 'User suspended' : 'User activated']);
    }

    public function TestimonialManagement()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.testimonial-management', compact('testimonials'));
    }

    public function storeTestimonial(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'position'   => 'required|string|max:255',
            'description'=> 'nullable|string',
            'image'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads/testimonials', 'public');
        }

        Testimonial::create([
            'name'        => $request->name,
            'position'    => $request->position,
            'description' => $request->description,
            'image'       => $path,
        ]);

        return back()->with('success', 'Testimonial Added Successfully');
    }

    public function updateTestimonial(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'position'   => 'required|string|max:255',
            'description'=> 'nullable|string',
            'image'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $path = $testimonial->image;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads/testimonials', 'public');
        }

        $testimonial->update([
            'name'        => $request->name,
            'position'    => $request->position,
            'description' => $request->description,
            'image'       => $path,
        ]);

        return back()->with('success', 'Testimonial Updated Successfully');
    }

    public function destroyTestimonial(Testimonial $testimonial)
    {
        if ($testimonial->image && file_exists(public_path('storage/' . $testimonial->image))) {
            unlink(public_path('storage/' . $testimonial->image));
        }

        $testimonial->delete();

        return back()->with('success', 'Testimonial Deleted Successfully');
    }

    public function AdminAboutUs()
    {
        $aboutus = AboutUs::first();
        return view('admin.admin-about', compact('aboutus'));
    }

    public function updateAboutUs(Request $request)
    {
        // Validation of request fields
        $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|string', 
        ]);

        // Get or create the first record for About Us
        $aboutUs = AboutUs::firstOrCreate([]);

        // Check if the request has the 'title' field and update it
        if ($request->has('title')) {
            $aboutUs->title = $request->title;
        }

        // Check if the request has the 'description' field and update it
        if ($request->has('description')) {
            $aboutUs->description = $request->description;
        }

        // Check if the request has an 'image' field and update it
        if ($request->has('image')) {
            $aboutUs->image = $request->image;
        }

        // Save the updated record
        $aboutUs->save();

        // Return success response
        return response()->json(['success' => true, 'message' => 'About Us updated successfully!']);
    }


    //Privacy Policy & Terms Section....
    public function privacyTerms(Request $request)
    {
        $privacyTerms = PrivacyPolicyTermsCondition::first();

        return view('admin.privacy-term', compact('privacyTerms'));
    }

    public function updatePrivacyTerms(Request $request)
    {
        $request->validate([
            'privacy_policy' => 'nullable|string',
            'terms_condition' => 'nullable|string',
        ]);

        $privacyTerms = PrivacyPolicyTermsCondition::firstOrCreate([]);

        if ($request->has('privacy_policy')) {
            $privacyTerms->privacy_policy = $request->privacy_policy;
        }

        if ($request->has('terms_condition')) {
            $privacyTerms->terms_condition = $request->terms_condition;
        }

        $privacyTerms->save();

        return response()->json(['success' => true, 'message' => 'Privacy Policy and Terms updated successfully!']);
    }

    public function GalleryManagement()
    {
       $gallery = Gallery::latest()->get();
       return view('admin.gallery-management', compact('gallery'));
    }

    public function storeGallery(Request $request)
    {
        $request->validate([
            'images.*' => 'required',
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $filename = time() . '-' . $file->getClientOriginalName();
                $file->move(public_path('uploads/gallery'), $filename);

                \App\Models\Gallery::create([
                    'image' => 'uploads/gallery/' . $filename,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Images uploaded successfully!');
    }

    public function deleteGallery($id)
    {
        $gallery = Gallery::findOrFail($id);

        // delete file from public/uploads/gallery
        if (file_exists(public_path($gallery->image))) {
            unlink(public_path($gallery->image));
        }

        // delete record
        $gallery->delete();

        return redirect()->back()->with('success', 'Image deleted successfully!');
    }


    public function GetInTouch()
    {
       $records = GetInTouch::get();
       return view('admin.get-in-touch', compact('records'));
    }

    // public function storeGetInTouch(Request $request)
    // {
    //     $request->validate([
    //         'image' => 'required|image|',
    //     ]);

    //     $path = $request->file('image')->store('uploads/get_in_touch', 'public');

    //     GetInTouch::create([
    //         'image' => 'storage/' . $path,
    //     ]);

    //     return redirect()->back()->with('success', 'Image added successfully!');
    // }

    // public function updateGetInTouch(Request $request, $id)
    // {
    //     $record = GetInTouch::findOrFail($id);

    //     if ($request->hasFile('image')) {
    //         if (file_exists(public_path($record->image))) {
    //             unlink(public_path($record->image));
    //         }
    //         $path = $request->file('image')->store('uploads/get_in_touch', 'public');
    //         $record->image = 'storage/' . $path;
    //     }

    //     $record->save();

    //     return redirect()->back()->with('success', 'Image updated successfully!');
    // }
    
    public function storeGetInTouch(Request $request)
{
    $request->validate([
        'image' => 'required|image',
    ]);

    // Store directly inside /public/uploads/get_in_touch
    $image = $request->file('image');
    $imageName = time() . '_' . $image->getClientOriginalName();
    $image->move(public_path('uploads/get_in_touch'), $imageName);

    GetInTouch::create([
        'image' => 'uploads/get_in_touch/' . $imageName,
    ]);

    return redirect()->back()->with('success', 'Image added successfully!');
}


public function updateGetInTouch(Request $request, $id)
{
    $record = GetInTouch::findOrFail($id);

    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($record->image && file_exists(public_path($record->image))) {
            unlink(public_path($record->image));
        }

        // Upload new image directly inside /public/uploads/get_in_touch
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads/get_in_touch'), $imageName);

        $record->image = 'uploads/get_in_touch/' . $imageName;
    }

    $record->save();

    return redirect()->back()->with('success', 'Image updated successfully!');
}


    public function deleteGetInTouch($id)
    {
        $record = GetInTouch::findOrFail($id);

        if (file_exists(public_path($record->image))) {
            unlink(public_path($record->image));
        }

        $record->delete();

        return redirect()->back()->with('success', 'Image deleted successfully!');
    }
    public function TrustedProjects()
    {
        $projects = TrustedProject::all();
        return view('admin.trusted-projects', compact('projects'));
    }

    public function storeTrustedProject(Request $request)
    {
        $request->validate([
            'trusted_clients' => 'required|integer',
            'finished_projects' => 'required|integer',
            'year_of_experience' => 'required|integer',
            'visited_experience' => 'required|integer',
        ]);

        TrustedProject::create($request->only([
            'trusted_clients', 'finished_projects', 'year_of_experience', 'visited_experience'
        ]));

        return redirect()->route('admin.trusted.project')->with('success', 'Project added successfully!');
    }

    public function updateTrustedProject(Request $request, $id)
    {
        $request->validate([
            'trusted_clients' => 'required|integer',
            'finished_projects' => 'required|integer',
            'year_of_experience' => 'required|integer',
            'visited_experience' => 'required|integer',
        ]);

        $project = TrustedProject::findOrFail($id);
        $project->update($request->only([
            'trusted_clients', 'finished_projects', 'year_of_experience', 'visited_experience'
        ]));

        return redirect()->route('admin.trusted.project')->with('success', 'Project updated successfully!');
    }

    public function destroyTrustedProject($id)
    {
        $project = TrustedProject::findOrFail($id);
        $project->delete();

        return redirect()->route('admin.trusted.project')->with('success', 'Project deleted successfully!');
    }

    public function IndsutriesManagement()
    {
        $teams = Industries::where('delete_status', 0)->get(); 
        return view('admin.add-industries', compact('teams'));
    }

    public function storeIndustries(Request $request)
    {
        $data = $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'name' => 'required|string',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
        // Get the image
        $image = $request->file('image');

        // Create a custom filename (optional)
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Move the image to public/images folder
        $image->move(public_path('images'), $imageName);

        // Save the path to database if needed
        $data['image'] = 'images/' . $imageName;
    }

        $user = Industries::create($data);

        return response()->json(['success' => 'Data saved successfully!', 'user' => $user]);
    }

    public function updateIndustries(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $user = Industries::findOrFail($id);
        $user->update($data);

        return response()->json(['success' => 'Data updated successfully!', 'user' => $user]);
    }

    public function getIndustries($id)
    {
        $user = Industries::findOrFail($id);
        return response()->json($user);
    }


    // Update destroy method to set delete_status to 1
    public function destroyIndustries($id)
    {
        $user = Industries::findOrFail($id);
        $user->delete_status = 1;  // Mark as deleted (soft delete)
        $user->save();

        return response()->json(['success' => 'User deleted successfully!']);
    }

    // Update block/unblock method to set block_status
    public function changeStatusIndustries($id, $status)
    {
        $user = Industries::findOrFail($id);

        if ($status == 'block') {
            $user->block_status = 1;  // Mark as blocked
        } else {
            $user->block_status = 0;  // Mark as active
        }

        $user->save();

        return response()->json(['success' => $status == 'block' ? 'User suspended' : 'User activated']);
    }

    // Service Management
    public function ServiceManagement()
    {
        $teams = Service::where('delete_status', 0)->get(); 
        return view('admin.service-management', compact('teams'));
    }

    public function storeService(Request $request)
    {
        $data = $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'name' => 'required|string',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        $user = Service::create($data);

        return response()->json(['success' => 'Data saved successfully!', 'user' => $user]);
    }

    public function updateService(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $user = Service::findOrFail($id);
        $user->update($data);

        return response()->json(['success' => 'Data updated successfully!', 'user' => $user]);
    }

    public function getService($id)
    {
        $user = Service::findOrFail($id);
        return response()->json($user);
    }


    // Update destroy method to set delete_status to 1
    public function destroyService($id)
    {
        $user = Service::findOrFail($id);
        $user->delete_status = 1;  // Mark as deleted (soft delete)
        $user->save();

        return response()->json(['success' => 'User deleted successfully!']);
    }

    // Update block/unblock method to set block_status
    public function changeStatusService($id, $status)
    {
        $user = Service::findOrFail($id);

        if ($status == 'block') {
            $user->block_status = 1;  // Mark as blocked
        } else {
            $user->block_status = 0;  // Mark as active
        }

        $user->save();

        return response()->json(['success' => $status == 'block' ? 'User suspended' : 'User activated']);
    }

    // Address Management
    public function AddressManagement()
    {
        $teams = Address::where('delete_status', 0)->get();
        return view('admin.address-management', compact('teams'));
    }

    public function storeAddress(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'nullable|string',
        ]);


        $user = Address::create($data);

        return response()->json(['success' => 'Data saved successfully!', 'user' => $user]);
    }

    public function updateAddress(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'nullable|string',
        ]);

        $user = Address::findOrFail($id);
        $user->update($data);

        return response()->json(['success' => 'Data updated successfully!', 'user' => $user]);
    }

    public function getAddress($id)
    {
        $user = Address::findOrFail($id);
        return response()->json($user);
    }


    // Update destroy method to set delete_status to 1
    public function destroyAddress($id)
    {
        $user = Address::findOrFail($id);
        $user->delete_status = 1;  // Mark as deleted (soft delete)
        $user->save();

        return response()->json(['success' => 'Address deleted successfully!']);
    }

    // Update block/unblock method to set block_status
    public function changeStatusAddress($id, $status)
    {
        $user = Address::findOrFail($id);

        if ($status == 'block') {
            $user->block_status = 1;  // Mark as blocked
        } else {
            $user->block_status = 0;  // Mark as active
        }

        $user->save();

        return response()->json(['success' => $status == 'block' ? 'Address suspended' : 'Address activated']);
    }

    // News Room Management //
    public function NewsManagement()
    {
        $teams = NewsRoom::where('delete_status', 0)->get();
        return view('admin.news-room-management', compact('teams'));
    }

    public function storeNews(Request $request)
    {
        $data = $request->validate([
            'date' => 'required',
            'title' => 'required',
            'link' => 'required',
        ]);

        $user = NewsRoom::create($data);

        return response()->json(['success' => 'Data saved successfully!', 'user' => $user]);
    }

    public function updateNews(Request $request, $id)
    {
        $data = $request->validate([
            'date' => 'required|string',
            'title' => 'required',
            'link' => 'required|string',
        ]);

        $user = NewsRoom::findOrFail($id);
        $user->update($data);

        return response()->json(['success' => 'Data updated successfully!', 'user' => $user]);
    }

    public function getNews($id)
    {
        $user = NewsRoom::findOrFail($id);
        return response()->json($user);
    }


    // Update destroy method to set delete_status to 1
    public function destroyNews($id)
    {
        $user = NewsRoom::findOrFail($id);
        $user->delete_status = 1;  // Mark as deleted (soft delete)
        $user->save();

        return response()->json(['success' => 'User deleted successfully!']);
    }

    // Update block/unblock method to set block_status
    public function changeStatusNews($id, $status)
    {
        $user = NewsRoom::findOrFail($id);

        if ($status == 'block') {
            $user->block_status = 1;  // Mark as blocked
        } else {
            $user->block_status = 0;  // Mark as active
        }

        $user->save();

        return response()->json(['success' => $status == 'block' ? 'User suspended' : 'User activated']);
    }

    // Quick Links Management //
    public function QuickLinksManagement()
    {
        $teams = QuickLink::where('delete_status', 0)->get();
        return view('admin.quick-links-management', compact('teams'));
    }

    public function storeQuickLinks(Request $request)
    {
        $data = $request->validate([
            'date' => 'required',
            'title' => 'required',
            'link' => 'required',
        ]);

        $user = QuickLink::create($data);

        return response()->json(['success' => 'Data saved successfully!', 'user' => $user]);
    }

    public function updateQuickLinks(Request $request, $id)
    {
        $data = $request->validate([
            'date' => 'required|string',
            'title' => 'required',
            'link' => 'required|string',
        ]);

        $user = QuickLink::findOrFail($id);
        $user->update($data);

        return response()->json(['success' => 'Data updated successfully!', 'user' => $user]);
    }

    public function getQuickLinks($id)
    {
        $user = QuickLink::findOrFail($id);
        return response()->json($user);
    }


    // Update destroy method to set delete_status to 1
    public function destroyQuickLinks($id)
    {
        $user = QuickLink::findOrFail($id);
        $user->delete_status = 1;  // Mark as deleted (soft delete)
        $user->save();

        return response()->json(['success' => 'User deleted successfully!']);
    }

    // Update block/unblock method to set block_status
    public function changeStatusQuickLinks($id, $status)
    {
        $user = QuickLink::findOrFail($id);

        if ($status == 'block') {
            $user->block_status = 1;  // Mark as blocked
        } else {
            $user->block_status = 0;  // Mark as active
        }

        $user->save();

        return response()->json(['success' => $status == 'block' ? 'User suspended' : 'User activated']);
    }
    
}
