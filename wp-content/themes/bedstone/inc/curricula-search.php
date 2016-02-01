<?php

// get taxonomy lists
$tax = 'curricula_search';

// topics
$terms[] = get_terms($tax, array(
    'child_of' => 1420
));

// grade level
$terms[] = get_terms($tax, array(
    'child_of' => 1421
));

// resources
$terms[] = get_terms($tax, array(
    'child_of' => 1422
));

?>

<?php if (!empty($terms[0]) || !empty($terms[1]) || !empty($terms[2])) : ?>

    <div class="advanced-search curricula-search box">
    	<h2 class="callout">Curricula Resources Search Tool</h2>

    	<form action="<?php echo get_permalink(PAGE_CURRICULA_SEARCH_RESULTS); ?>" method="post">

    	    <div class="row">
        	    <?php if (!empty($terms[0])) : ?>
            		<div class="form-group col-xs-3">
            			<select name="<?php echo $tax; ?>[]" class="form-control">
                            <option value="">-- Topic --</option>
                            <?php foreach($terms[0] as $term) :
                                $selected = (isset($_POST[$tax]) && in_array($term->term_id, $_POST[$tax])) ? ' selected="selected" ' : '';
                                ?>
                                <option value="<?php echo $term->term_id; ?>" <?php echo $selected; ?> ><?php echo $term->name; ?></option>
        				    <?php endforeach; ?>
            			</select>
            		</div>
        		<?php endif; ?>
        		<?php if (!empty($terms[1])) : ?>
                	<div class="form-group col-xs-3">
            			<select name="<?php echo $tax; ?>[]" class="form-control">
                            <option value="">-- Grade Level --</option>
                            <?php foreach($terms[1] as $term) :
                                $selected = (isset($_POST[$tax]) && in_array($term->term_id, $_POST[$tax])) ? ' selected="selected" ' : '';
                                ?>
                                <option value="<?php echo $term->term_id; ?>" <?php echo $selected; ?> ><?php echo $term->name; ?></option>
                            <?php endforeach; ?>
            			</select>
            		</div>
        		<?php endif; ?>
                <?php if (!empty($terms[2])) : ?>
            		<div class="form-group col-xs-3">
            			<select name="<?php echo $tax; ?>[]" class="form-control">
                            <option value="">-- Resource --</option>
                            <?php foreach($terms[2] as $term) :
                                $selected = (isset($_POST[$tax]) && in_array($term->term_id, $_POST[$tax])) ? ' selected="selected" ' : '';
                                ?>
                                <option value="<?php echo $term->term_id; ?>" <?php echo $selected; ?> ><?php echo $term->name; ?></option>
                            <?php endforeach; ?>
            			</select>
            		</div>
                <?php endif; ?>
        		<button type="submit" class="button submit">Search</button>
        	</div>

        	<a class="switch-advanced-search" href="">Advanced Search</a>
            <script>
                (function($) {
                    var body = $(document.body);
                    $('.switch-advanced-search').click(function(e){
                        e.preventDefault();
                        $(this).hide();
                        $('.advanced-search-fields').removeClass('hidden');
                    });
                })(jQuery);
            </script>

        	<div class="row advanced-search-fields hidden">
                <?php if (!empty($terms[0])) : ?>
                    <div class="col-xs-5">
                        <h3>Topics</h3>
                        <?php foreach($terms[0] as $term) :
                            $checked = (isset($_POST[$tax]) && in_array($term->term_id, $_POST[$tax])) ? ' checked="checked" ' : '';
                            ?>
                            <div class="checkbox">
                                <label for="term_<?php echo $term->term_id; ?>">
                                    <input type="checkbox" name="<?php echo $tax; ?>[]" value="<?php echo $term->term_id; ?>" id="term_<?php echo $term->term_id; ?>" <?php echo $checked; ?> >
                                    <?php echo $term->name; ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($terms[1])) : ?>
                    <div class="col-xs-3">
                        <h3>Grade Level</h3>
                        <?php foreach($terms[1] as $term) :
                            $checked = (isset($_POST[$tax]) && in_array($term->term_id, $_POST[$tax])) ? ' checked="checked" ' : '';
                            ?>
                            <div class="checkbox">
                                <label for="term_<?php echo $term->term_id; ?>">
                                    <input type="checkbox" name="<?php echo $tax; ?>[]" value="<?php echo $term->term_id; ?>" id="term_<?php echo $term->term_id; ?>" <?php echo $checked; ?> >
                                    <?php echo $term->name; ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <div class="col-xs-3">
                    <?php if (!empty($terms[2])) : ?>
                        <h3>Resources</h3>
                        <?php foreach($terms[2] as $term) :
                            $checked = (isset($_POST[$tax]) && in_array($term->term_id, $_POST[$tax])) ? ' checked="checked" ' : '';
                            ?>
                            <div class="checkbox">
                                <label for="term_<?php echo $term->term_id; ?>">
                                    <input type="checkbox" name="<?php echo $tax; ?>[]" value="<?php echo $term->term_id; ?>" id="term_<?php echo $term->term_id; ?>" <?php echo $checked; ?> >
                                    <?php echo $term->name; ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <button type="submit" class="button submit">Search</button>
                </div>
        	</div>
        </form>

    </div>

<?php endif; ?>
