<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Specify access control level per privacy data category
*/
class WindowsPrivacyDataAccessControlItem extends Entity implements Parsable 
{
    /**
     * Instantiates a new windowsPrivacyDataAccessControlItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsPrivacyDataAccessControlItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsPrivacyDataAccessControlItem {
        return new WindowsPrivacyDataAccessControlItem();
    }

    /**
     * Gets the accessLevel property value. Determine the access level to specific Windows privacy data category.
     * @return WindowsPrivacyDataAccessLevel|null
    */
    public function getAccessLevel(): ?WindowsPrivacyDataAccessLevel {
        $val = $this->getBackingStore()->get('accessLevel');
        if (is_null($val) || $val instanceof WindowsPrivacyDataAccessLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessLevel'");
    }

    /**
     * Gets the appDisplayName property value. The Package Family Name of a Windows app. When set, the access level applies to the specified application.
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        $val = $this->getBackingStore()->get('appDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appDisplayName'");
    }

    /**
     * Gets the appPackageFamilyName property value. The Package Family Name of a Windows app. When set, the access level applies to the specified application.
     * @return string|null
    */
    public function getAppPackageFamilyName(): ?string {
        $val = $this->getBackingStore()->get('appPackageFamilyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appPackageFamilyName'");
    }

    /**
     * Gets the dataCategory property value. Windows privacy data category specifier for privacy data access.
     * @return WindowsPrivacyDataCategory|null
    */
    public function getDataCategory(): ?WindowsPrivacyDataCategory {
        $val = $this->getBackingStore()->get('dataCategory');
        if (is_null($val) || $val instanceof WindowsPrivacyDataCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataCategory'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessLevel' => fn(ParseNode $n) => $o->setAccessLevel($n->getEnumValue(WindowsPrivacyDataAccessLevel::class)),
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'appPackageFamilyName' => fn(ParseNode $n) => $o->setAppPackageFamilyName($n->getStringValue()),
            'dataCategory' => fn(ParseNode $n) => $o->setDataCategory($n->getEnumValue(WindowsPrivacyDataCategory::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('accessLevel', $this->getAccessLevel());
        $writer->writeStringValue('appDisplayName', $this->getAppDisplayName());
        $writer->writeStringValue('appPackageFamilyName', $this->getAppPackageFamilyName());
        $writer->writeEnumValue('dataCategory', $this->getDataCategory());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the accessLevel property value. Determine the access level to specific Windows privacy data category.
     * @param WindowsPrivacyDataAccessLevel|null $value Value to set for the accessLevel property.
    */
    public function setAccessLevel(?WindowsPrivacyDataAccessLevel $value): void {
        $this->getBackingStore()->set('accessLevel', $value);
    }

    /**
     * Sets the appDisplayName property value. The Package Family Name of a Windows app. When set, the access level applies to the specified application.
     * @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the appPackageFamilyName property value. The Package Family Name of a Windows app. When set, the access level applies to the specified application.
     * @param string|null $value Value to set for the appPackageFamilyName property.
    */
    public function setAppPackageFamilyName(?string $value): void {
        $this->getBackingStore()->set('appPackageFamilyName', $value);
    }

    /**
     * Sets the dataCategory property value. Windows privacy data category specifier for privacy data access.
     * @param WindowsPrivacyDataCategory|null $value Value to set for the dataCategory property.
    */
    public function setDataCategory(?WindowsPrivacyDataCategory $value): void {
        $this->getBackingStore()->set('dataCategory', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
