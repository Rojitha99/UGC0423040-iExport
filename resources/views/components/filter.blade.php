    <div class="col-md-3" style="height: 600px; overflow-y: auto; position: sticky; top: 140px;">
    <!-- Sidebar Filter -->
          <form method="GET" action="/customerfilter">
          <h6>Sort results by</h6>
          <select class="form-select mb-3" name="sortBy">
              <option value="newest">Date: Newest on top</option>
              <option value="oldest">Date: Oldest on top</option>
              <option value="priceLow">Price: Low to High</option>
              <option value="priceHigh">Price: High to Low</option>
          </select>

          <h6>Filter ads by</h6>
          <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" name="urgent" value="1">
              <label class="form-check-label">URGENT</label>
          </div>

          <h6>Category</h6>
          <select class="form-select mb-3" name="category">
              <option value="all">All Categories</option>
              <option value="stick">Stick</option>
              <option value="powder">Powder</option>
              <option value="oil">Oil</option>
              <option value="Seeds">Seeds</option>
              <option value="Whole">Whole</option>
          </select>

          <h6>Location</h6>
          <select class="form-select mb-3" name="location">
              <option value="all">All Locations</option>
              <option value="galle">Galle</option>
              <option value="matara">Matara</option>
              <option value="gampaha">Gampaha</option>
              <option value="kalutara">Kalutara</option>
              <option value="colombo">Colombo</option>
              <option value="ratnapura">Ratnapura</option>
          </select>

          <button class="btn btn-warning w-100" type="submit">Apply Filters</button>
          <a href="#" class="btn btn-outline-secondary w-100 mt-2">Reset Filters</a>
      </form>
    </div>