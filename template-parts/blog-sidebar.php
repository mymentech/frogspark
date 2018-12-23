<div class="filter-options">
    <h3>FILTERS POSTS</h3>

    <ul class="list-unstyled">
        <li>
            <a href="#">Popular</a>
        </li>
        <li>
            <a class="#" href="#">Latest News</a>
        </li>
        <li>
            <a href="#">Featured</a>
        </li>
        <li>
            <a href="#">Promotions</a>
        </li>
    </ul>

    <div class="blog-search">
        <form action="/">
            <input type="text" name="s" value="<?php the_search_query(); ?>" class="form-control search" placeholder="Search">
        </form>
    </div>
    <div class="tag-list">
        <ul>
            <li>
                <a href="#"><span>></span>Tags</a>
            </li>
            <li>
                <a href="#"><span>></span>Archives</a>
            </li>
            <li>
                <a href="#"><span>></span>Categories</a>
            </li>
        </ul>
    </div>
    <div class="subscription-form-sec">
        <form>
            <h3>Never miss a thing! <br> Join our Newsletter...</h3>
            <input type="text" placeholder="Your email address" class="form-control">
            <input type="submit" class="submit" value="Submit">
        </form>
    </div>
</div>