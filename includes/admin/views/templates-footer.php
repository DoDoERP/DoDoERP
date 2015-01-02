<div class="erp-modal">

    <span id="modal-label" class="screen-reader-text"><?php _e( 'Modal window. Press escape to close.', 'wp-erp' ); ?></span>
    <a href="#" class="close">× <span class="screen-reader-text"><?php _e( 'Close modal window', 'wp-erp' ); ?></span></a>

    <form action="" class="erp-modal-form" method="post">
        <header class="modal-header">
            <h2>&nbsp;</h2>
        </header>

        <div class="content-container modal-footer">
            <div class="content"><?php _e( 'Loading', 'wp-erp' ); ?></div>
        </div>

        <footer>
            <ul>
                <li>
                    <span class="activate">
                        <button type="submit" class="button-primary"></button>
                    </span>
                </li>
            </ul>
        </footer>
    </form>
</div>
<div class="erp-modal-backdrop"></div>

<script type="text/html" id="tmpl-erp-new-dept">
    <div class="row">
        <label for="dept-title"><?php _e( 'Department Title', 'wp-erp' ); ?> <span class="required">*</span></label>
        <span class="field">
            <input type="text" id="dept-title" name="title" value="" required="required">
        </span>
    </div>

    <div class="row">
        <label for="dept-desc"><?php _e( 'Description', 'wp-erp' ); ?></label>
        <span class="field">
            <textarea name="dept-desc" id="dept-desc" rows="2" cols="20" placeholder="<?php _e( 'Optional', 'wp-erp' ); ?>"></textarea>
        </span>
    </div>

    <div class="row">
        <label for="dept-lead"><?php _e( 'Department Lead', 'wp-erp' ); ?></label>
        <span class="field">
            <select name="lead" id="dept-lead">
                <option value="0"><?php _e( '- Select Lead -', 'wp-erp' ); ?></option>
            </select>
        </span>
    </div>

    <div class="row">
        <label for="parent-dept"><?php _e( 'Parent Department', 'wp-erp' ); ?></label>
        <span class="field">
            <select name="parent" id="dept-parent">
                <?php echo erp_hr_get_departments_dropdown( erp_get_current_company_id() ); ?>
            </select>
        </span>
    </div>

    <?php wp_nonce_field( 'erp-new-dept' ); ?>
    <input type="hidden" name="action" id="dept-action" value="erp-hr-new-dept">
    <input type="hidden" name="dept_id" id="dept-id" value="0">
</script>

<script type="text/html" id="tmpl-erp-new-desig">
    <div class="row">
        <label for="desig-title"><?php _e( 'Designation Title', 'wp-erp' ); ?> <span class="required">*</span></label>
        <span class="field">
            <input type="text" id="desig-title" name="title" value="" required="required">
        </span>
    </div>

    <div class="row">
        <label for="desig-desc"><?php _e( 'Description', 'wp-erp' ); ?></label>
        <span class="field">
            <textarea name="desig-desc" id="desig-desc" rows="2" cols="20" placeholder="<?php _e( 'Optional', 'wp-erp' ); ?>"></textarea>
        </span>
    </div>

    <?php wp_nonce_field( 'erp-new-desig' ); ?>
    <input type="hidden" name="action" id="desig-action" value="erp-hr-new-desig">
    <input type="hidden" name="desig_id" id="desig-id" value="0">
</script>

<script type="text/html" id="tmpl-erp-dept-row">
    <tr class="{{ data.cls }}" id="erp-dept-{{ data.id }}">
        <th scope="row" class="check-column">
            <input id="cb-select-1" type="checkbox" name="dept[]" value="{{ data.id }}">
        </th>
        <td class="col-">

            <strong><a href="#">{{ data.title }}</a></strong>

            <div class="row-actions">
                <span class="edit"><a href="#" title="Edit this item" data-id="{{ data.id }}"><?php _e( 'Edit', 'wp-erp' ); ?></a> | </span>
                <span class="trash"><a class="submitdelete" data-id="{{ data.id }}" title="<?php esc_attr_e( 'Delete this item', 'wp-erp' ); ?>" href="#"><?php _e( 'Delete', 'wp-erp' ); ?></a></span>
            </div>
        </td>
        <td class="col-">{{ data.lead }}</td>
        <td class="col-">{{ data.employee }}</td>
    </tr>
</script>

<script type="text/html" id="tmpl-erp-desig-row">
    <tr class="{{ data.cls }}" id="erp-dept-{{ data.id }}">
        <th scope="row" class="check-column">
            <input id="cb-select-1" type="checkbox" name="desig[]" value="{{ data.id }}">
        </th>
        <td class="col-">

            <strong><a href="#">{{ data.title }}</a></strong>

            <div class="row-actions">
                <span class="edit"><a href="#" title="Edit this item" data-id="{{ data.id }}"><?php _e( 'Edit', 'wp-erp' ); ?></a> | </span>
                <span class="trash"><a class="submitdelete" data-id="{{ data.id }}" title="<?php esc_attr_e( 'Delete this item', 'wp-erp' ); ?>" href="#"><?php _e( 'Delete', 'wp-erp' ); ?></a></span>
            </div>
        </td>
        <td class="col-">{{ data.employee }}</td>
    </tr>
</script>