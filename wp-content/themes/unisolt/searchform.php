<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" class="form-control  search-field" placeholder="<?php pll_e( 'search' ); ?>" value="" name="s">
    <input type="hidden" value="product" name="post_type">
    <button type="submit" class="search-submit">
        <svg width="25" height="23" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="9" cy="9" r="8.5" fill="white" stroke="#8B8B8B"/>
            <path d="M23.8677 21.1821L16.0001 15.0001" stroke="#989898" stroke-width="2" stroke-linecap="round"/>
        </svg>

    </button>
</form>