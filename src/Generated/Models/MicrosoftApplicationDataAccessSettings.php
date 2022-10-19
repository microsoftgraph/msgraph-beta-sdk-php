<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftApplicationDataAccessSettings extends Entity implements Parsable 
{
    /**
     * @var string|null $disabledForGroup The ID of an Azure Active Directory (Azure AD) security group for which the members are allowed to access Microsoft 365 data using only Microsoft 365 apps, but not other Microsoft apps such as Edge.  This is only applicable if isEnabledForAllMicrosoftApplications is set to true.
    */
    private ?string $disabledForGroup = null;
    
    /**
     * @var bool|null $isEnabledForAllMicrosoftApplications When set to true, all users in the organization can access in a Microsoft app any Microsoft 365 data that the user has been authorized to access. The Microsoft app can be a Microsoft 365 app (for example, Excel, Outlook) or non-Microsoft 365 app (for example, Edge). The default is true.  It is possible to disable this access for a subset of users in an Azure AD security group, by specifying the group in the disabledForGroup property.  When set to false, all users can access authorized Microsoft 365 data only in a Microsoft 365 app.
    */
    private ?bool $isEnabledForAllMicrosoftApplications = null;
    
    /**
     * Instantiates a new microsoftApplicationDataAccessSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftApplicationDataAccessSettings');
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
     * Gets the disabledForGroup property value. The ID of an Azure Active Directory (Azure AD) security group for which the members are allowed to access Microsoft 365 data using only Microsoft 365 apps, but not other Microsoft apps such as Edge.  This is only applicable if isEnabledForAllMicrosoftApplications is set to true.
     * @return string|null
    */
    public function getDisabledForGroup(): ?string {
        return $this->disabledForGroup;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'disabledForGroup' => fn(ParseNode $n) => $o->setDisabledForGroup($n->getStringValue()),
            'isEnabledForAllMicrosoftApplications' => fn(ParseNode $n) => $o->setIsEnabledForAllMicrosoftApplications($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isEnabledForAllMicrosoftApplications property value. When set to true, all users in the organization can access in a Microsoft app any Microsoft 365 data that the user has been authorized to access. The Microsoft app can be a Microsoft 365 app (for example, Excel, Outlook) or non-Microsoft 365 app (for example, Edge). The default is true.  It is possible to disable this access for a subset of users in an Azure AD security group, by specifying the group in the disabledForGroup property.  When set to false, all users can access authorized Microsoft 365 data only in a Microsoft 365 app.
     * @return bool|null
    */
    public function getIsEnabledForAllMicrosoftApplications(): ?bool {
        return $this->isEnabledForAllMicrosoftApplications;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('disabledForGroup', $this->disabledForGroup);
        $writer->writeBooleanValue('isEnabledForAllMicrosoftApplications', $this->isEnabledForAllMicrosoftApplications);
    }

    /**
     * Sets the disabledForGroup property value. The ID of an Azure Active Directory (Azure AD) security group for which the members are allowed to access Microsoft 365 data using only Microsoft 365 apps, but not other Microsoft apps such as Edge.  This is only applicable if isEnabledForAllMicrosoftApplications is set to true.
     *  @param string|null $value Value to set for the disabledForGroup property.
    */
    public function setDisabledForGroup(?string $value ): void {
        $this->disabledForGroup = $value;
    }

    /**
     * Sets the isEnabledForAllMicrosoftApplications property value. When set to true, all users in the organization can access in a Microsoft app any Microsoft 365 data that the user has been authorized to access. The Microsoft app can be a Microsoft 365 app (for example, Excel, Outlook) or non-Microsoft 365 app (for example, Edge). The default is true.  It is possible to disable this access for a subset of users in an Azure AD security group, by specifying the group in the disabledForGroup property.  When set to false, all users can access authorized Microsoft 365 data only in a Microsoft 365 app.
     *  @param bool|null $value Value to set for the isEnabledForAllMicrosoftApplications property.
    */
    public function setIsEnabledForAllMicrosoftApplications(?bool $value ): void {
        $this->isEnabledForAllMicrosoftApplications = $value;
    }

}
