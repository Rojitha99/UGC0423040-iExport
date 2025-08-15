<!-- resources/views/posts/index.blade.php -->
@auth
    <h1>My Posts</h1>
    @forelse(auth()->user()->posts as $post)
        <div class="post">
            <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="post_title" class="form-label">Post Title</label>
                            <input type="text" class="form-control" id="post_title" name="post_title" placeholder="Enter Post Title" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-control" id="category" name="category" required>
                                
                                <option value="Cinnamon">Cinnamon</option>
                                <option value="Pepper">Pepper</option>
                                <option value="Cloves">Cloves</option>
                                <option value="Nutmeg">Nutmeg</option>
                                <option value="Cardamom">Cardamom</option>
                            </select>
                        </div>

                         <div class="form-group mb-3">
                            <label for="product_category" class="form-label">Product Category</label>
                            <select class="form-control" id="product_category" name="product_category" required>
                                
                                <option value="Cinnamon">Oil</option>
                                <option value="Pepper">Seeds</option>
                                <option value="Cloves">Stick</option>
                                <option value="Nutmeg">Powder</option>
                                <option value="Cardamom">Whole</option>
                            </select>
                        </div>

                         <div class="form-group mb-3">
                            <label for="place" class="form-label">Product Category</label>
                            <select class="form-control" id="place" name="place" required>
                                
                                <option value="all">All Locations</option>
                                    <option value="galle">Galle</option>
                                    <option value="matara">Matara</option>
                                    <option value="gampaha">Gampaha</option>
                                    <option value="kalatara">Kalutara</option>
                                    <option value="colombo">Colombo</option>
                                    <option value="ratnapura">Ratnapura</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Company Name" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="Description" class="form-label">Description</label>
                            <textarea class="form-control" id="Description" name="Description" rows="3" required></textarea>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="contact_number" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter Contact Number" required>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="terms" name="urgent" value="1">
                            <label class="form-check-label" for="terms">
                            Urgent
                            </label>
                        </div>

                        <div class="form-group mb-3">
                            <label for="image" class="form-label">Image Upload</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="more_info_link" class="form-label">More Info Link</label>
                            <input type="url" class="form-control" id="more_info_link" name="more_info_link" placeholder="Enter your Link">
                        </div>
                    </div>
        </div>
    @empty
        <p>You have no posts yet.</p>
    @endforelse
@endauth