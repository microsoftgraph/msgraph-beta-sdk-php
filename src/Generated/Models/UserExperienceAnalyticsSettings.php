<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $configurationManagerDataConnectorConfigured True if Tenant attach is configured. If configured then SCCM tenant attached devices will show up in UXA reporting.
    */
    private ?bool $configurationManagerDataConnectorConfigured = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsSettings {
        return new UserExperienceAnalyticsSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the configurationManagerDataConnectorConfigured property value. True if Tenant attach is configured. If configured then SCCM tenant attached devices will show up in UXA reporting.
     * @return bool|null
    */
    public function getConfigurationManagerDataConnectorConfigured(): ?bool {
        return $this->configurationManagerDataConnectorConfigured;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'configurationManagerDataConnectorConfigured' => function (ParseNode $n) use ($o) { $o->setConfigurationManagerDataConnectorConfigured($n->getBooleanValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('configurationManagerDataConnectorConfigured', $this->configurationManagerDataConnectorConfigured);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the configurationManagerDataConnectorConfigured property value. True if Tenant attach is configured. If configured then SCCM tenant attached devices will show up in UXA reporting.
     *  @param bool|null $value Value to set for the configurationManagerDataConnectorConfigured property.
    */
    public function setConfigurationManagerDataConnectorConfigured(?bool $value ): void {
        $this->configurationManagerDataConnectorConfigured = $value;
    }

}
