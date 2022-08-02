<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcOrganizationSettings extends Entity implements Parsable 
{
    /**
     * @var CloudPcOperatingSystem|null $osVersion The version of the operating system (OS) to provision on Cloud PCs. The possible values are: windows10, windows11, unknownFutureValue.
    */
    private ?CloudPcOperatingSystem $osVersion = null;
    
    /**
     * @var CloudPcUserAccountType|null $userAccountType The account type of the user on provisioned Cloud PCs. The possible values are: standardUser, administrator, unknownFutureValue.
    */
    private ?CloudPcUserAccountType $userAccountType = null;
    
    /**
     * @var CloudPcWindowsSettings|null $windowsSettings Represents the Cloud PC organization settings for a tenant. A tenant has only one cloudPcOrganizationSettings object. The default language value en-US.
    */
    private ?CloudPcWindowsSettings $windowsSettings = null;
    
    /**
     * Instantiates a new CloudPcOrganizationSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcOrganizationSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcOrganizationSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcOrganizationSettings {
        return new CloudPcOrganizationSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'osVersion' => function (ParseNode $n) use ($o) { $o->setOsVersion($n->getEnumValue(CloudPcOperatingSystem::class)); },
            'userAccountType' => function (ParseNode $n) use ($o) { $o->setUserAccountType($n->getEnumValue(CloudPcUserAccountType::class)); },
            'windowsSettings' => function (ParseNode $n) use ($o) { $o->setWindowsSettings($n->getObjectValue(array(CloudPcWindowsSettings::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the osVersion property value. The version of the operating system (OS) to provision on Cloud PCs. The possible values are: windows10, windows11, unknownFutureValue.
     * @return CloudPcOperatingSystem|null
    */
    public function getOsVersion(): ?CloudPcOperatingSystem {
        return $this->osVersion;
    }

    /**
     * Gets the userAccountType property value. The account type of the user on provisioned Cloud PCs. The possible values are: standardUser, administrator, unknownFutureValue.
     * @return CloudPcUserAccountType|null
    */
    public function getUserAccountType(): ?CloudPcUserAccountType {
        return $this->userAccountType;
    }

    /**
     * Gets the windowsSettings property value. Represents the Cloud PC organization settings for a tenant. A tenant has only one cloudPcOrganizationSettings object. The default language value en-US.
     * @return CloudPcWindowsSettings|null
    */
    public function getWindowsSettings(): ?CloudPcWindowsSettings {
        return $this->windowsSettings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('osVersion', $this->osVersion);
        $writer->writeEnumValue('userAccountType', $this->userAccountType);
        $writer->writeObjectValue('windowsSettings', $this->windowsSettings);
    }

    /**
     * Sets the osVersion property value. The version of the operating system (OS) to provision on Cloud PCs. The possible values are: windows10, windows11, unknownFutureValue.
     *  @param CloudPcOperatingSystem|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?CloudPcOperatingSystem $value ): void {
        $this->osVersion = $value;
    }

    /**
     * Sets the userAccountType property value. The account type of the user on provisioned Cloud PCs. The possible values are: standardUser, administrator, unknownFutureValue.
     *  @param CloudPcUserAccountType|null $value Value to set for the userAccountType property.
    */
    public function setUserAccountType(?CloudPcUserAccountType $value ): void {
        $this->userAccountType = $value;
    }

    /**
     * Sets the windowsSettings property value. Represents the Cloud PC organization settings for a tenant. A tenant has only one cloudPcOrganizationSettings object. The default language value en-US.
     *  @param CloudPcWindowsSettings|null $value Value to set for the windowsSettings property.
    */
    public function setWindowsSettings(?CloudPcWindowsSettings $value ): void {
        $this->windowsSettings = $value;
    }

}
