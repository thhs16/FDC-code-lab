<?php
    # This code are for Laravel.

    // create blogs post
    public function create(Request $request){ // has to import Request in Laravel
        
        // $request is what user filled out in the form
        
        // check validation
        $this->checkBlogsValidation($request);

        $data = $this->requestBlogData($request);

        Blogs::create($data);

        return back();-> with('createSuccess' => 'Your blog has created successfully.') // back to index.blade.php
    }

    // check blogs validation
    private function checkBlogsValidation($request){
        $validator = $request->validate([
            'title' = 'required | min:10' ,
            'description' = 'required' ,
            'fee' = 'required' ,
            'address' = 'required | min:2' ,
            'rating' = 'required' ,
            'image' = 'required|mimes:png,jpg,jpeg' ,
        ])
    }

    // request blog data
    private function requestBlogData($request){
        return [
            'title' => $request->title , // 'title has to be'
            'description' => $request->description ,
            'fee' => $request->fee,
            'address' => $request->address,
            'rating' => $request->rating,
            'image' => null
            
        ]
    }