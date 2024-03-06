<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftApplicationDataAccessSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new MicrosoftApplicationDataAccessSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftApplicationDataAccessSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftApplicationDataAccessSettings {
        return new MicrosoftApplicationDataAccessSettings();
    }

    /**
     * Gets the disabledForGroup property value. The ID of a Microsoft Entra security group for which the members are allowed to access Microsoft 365 data using only Microsoft 365 apps, but not other Microsoft apps such as Edge.  This is only applicable if isEnabledForAllMicrosoftApplications is set to true.
     * @return string|null
    */
    public function getDisabledForGroup(): ?string {
        $val = $this->getBackingStore()->get('disabledForGroup');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disabledForGroup'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'disabledForGroup' => fn(ParseNode $n) => $o->setDisabledForGroup($n->getStringValue()),
            'isEnabledForAllMicrosoftApplications' => fn(ParseNode $n) => $o->setIsEnabledForAllMicrosoftApplications($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isEnabledForAllMicrosoftApplications property value. When set to true, all users in the organization can access in a Microsoft app any Microsoft 365 data that the user has been authorized to access. The Microsoft app can be a Microsoft 365 app (for example, Excel, Outlook) or non-Microsoft 365 app (for example, Edge). The default is true.  It is possible to disable this access for a subset of users in a Microsoft Entra security group, by specifying the group in the disabledForGroup property.  When set to false, all users can access authorized Microsoft 365 data only in a Microsoft 365 app.
     * @return bool|null
    */
    public function getIsEnabledForAllMicrosoftApplications(): ?bool {
        $val = $this->getBackingStore()->get('isEnabledForAllMicrosoftApplications');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabledForAllMicrosoftApplications'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('disabledForGroup', $this->getDisabledForGroup());
        $writer->writeBooleanValue('isEnabledForAllMicrosoftApplications', $this->getIsEnabledForAllMicrosoftApplications());
    }

    /**
     * Sets the disabledForGroup property value. The ID of a Microsoft Entra security group for which the members are allowed to access Microsoft 365 data using only Microsoft 365 apps, but not other Microsoft apps such as Edge.  This is only applicable if isEnabledForAllMicrosoftApplications is set to true.
     * @param string|null $value Value to set for the disabledForGroup property.
    */
    public function setDisabledForGroup(?string $value): void {
        $this->getBackingStore()->set('disabledForGroup', $value);
    }

    /**
     * Sets the isEnabledForAllMicrosoftApplications property value. When set to true, all users in the organization can access in a Microsoft app any Microsoft 365 data that the user has been authorized to access. The Microsoft app can be a Microsoft 365 app (for example, Excel, Outlook) or non-Microsoft 365 app (for example, Edge). The default is true.  It is possible to disable this access for a subset of users in a Microsoft Entra security group, by specifying the group in the disabledForGroup property.  When set to false, all users can access authorized Microsoft 365 data only in a Microsoft 365 app.
     * @param bool|null $value Value to set for the isEnabledForAllMicrosoftApplications property.
    */
    public function setIsEnabledForAllMicrosoftApplications(?bool $value): void {
        $this->getBackingStore()->set('isEnabledForAllMicrosoftApplications', $value);
    }

}
