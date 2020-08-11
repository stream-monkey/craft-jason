<?php
/**
 * Jason plugin for Craft CMS 3.x
 *
 * A field type for displaying & editing JSON data.
 *
 * @link      https://chasegiunta.com
 * @copyright Copyright (c) 2019 Chase Giunta
 */

namespace chasegiunta\jason\fields;

/**
 * JasonLongtextField Field
 *
 * Extension of the default JasonField for the LONGTEXT MySQL field type.
 *
 * https://craftcms.com/docs/plugins/field-types
 *
 * @author    Chase Giunta
 * @package   Jason
 * @since     1.0.0
 */
class JasonLongtextField extends JasonField
{
    /**
     * Returns the display name of this class.
     *
     * @return string The display name of this class.
     */
    public static function displayName(): string
    {
        return 'JSON (Jason) (LONGTEXT)'; 
    }

    /**
     * Returns the column type that this field should get within the content table.
     *
     * This method will only be called if [[hasContentColumn()]] returns true.
     *
     * @return string The column type. [[\yii\db\QueryBuilder::getColumnType()]] will be called
     * to convert the give column type to the physical one. For example, `string` will be converted
     * as `varchar(255)` and `string(100)` becomes `varchar(100)`. `not null` will automatically be
     * appended as well.
     * @see \yii\db\QueryBuilder::getColumnType()
     */
    public function getContentColumnType(): string
    {
        return 'longtext';
    }
}
