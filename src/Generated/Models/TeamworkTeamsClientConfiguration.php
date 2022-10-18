<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkTeamsClientConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var TeamworkAccountConfiguration|null $accountConfiguration The configuration of the Microsoft Teams client user account for a device.
    */
    private ?TeamworkAccountConfiguration $accountConfiguration = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeamworkFeaturesConfiguration|null $featuresConfiguration The configuration of Microsoft Teams client features for a device.
    */
    private ?TeamworkFeaturesConfiguration $featuresConfiguration = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new teamworkTeamsClientConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamworkTeamsClientConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkTeamsClientConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkTeamsClientConfiguration {
        return new TeamworkTeamsClientConfiguration();
    }

    /**
     * Gets the accountConfiguration property value. The configuration of the Microsoft Teams client user account for a device.
     * @return TeamworkAccountConfiguration|null
    */
    public function getAccountConfiguration(): ?TeamworkAccountConfiguration {
        return $this->accountConfiguration;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the featuresConfiguration property value. The configuration of Microsoft Teams client features for a device.
     * @return TeamworkFeaturesConfiguration|null
    */
    public function getFeaturesConfiguration(): ?TeamworkFeaturesConfiguration {
        return $this->featuresConfiguration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountConfiguration' => fn(ParseNode $n) => $o->setAccountConfiguration($n->getObjectValue([TeamworkAccountConfiguration::class, 'createFromDiscriminatorValue'])),
            'featuresConfiguration' => fn(ParseNode $n) => $o->setFeaturesConfiguration($n->getObjectValue([TeamworkFeaturesConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('accountConfiguration', $this->accountConfiguration);
        $writer->writeObjectValue('featuresConfiguration', $this->featuresConfiguration);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accountConfiguration property value. The configuration of the Microsoft Teams client user account for a device.
     *  @param TeamworkAccountConfiguration|null $value Value to set for the accountConfiguration property.
    */
    public function setAccountConfiguration(?TeamworkAccountConfiguration $value ): void {
        $this->accountConfiguration = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the featuresConfiguration property value. The configuration of Microsoft Teams client features for a device.
     *  @param TeamworkFeaturesConfiguration|null $value Value to set for the featuresConfiguration property.
    */
    public function setFeaturesConfiguration(?TeamworkFeaturesConfiguration $value ): void {
        $this->featuresConfiguration = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
