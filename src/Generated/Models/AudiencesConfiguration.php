<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AudiencesConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AudiencesConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AudiencesConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AudiencesConfiguration {
        return new AudiencesConfiguration();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the azureAdMultipleOrgs property value. Setting to allow or disallow creation of apps with multitenant signInAudience.
     * @return AzureAdMultipleOrgsAudienceRestriction|null
    */
    public function getAzureAdMultipleOrgs(): ?AzureAdMultipleOrgsAudienceRestriction {
        $val = $this->getBackingStore()->get('azureAdMultipleOrgs');
        if (is_null($val) || $val instanceof AzureAdMultipleOrgsAudienceRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureAdMultipleOrgs'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'azureAdMultipleOrgs' => fn(ParseNode $n) => $o->setAzureAdMultipleOrgs($n->getObjectValue([AzureAdMultipleOrgsAudienceRestriction::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'personalMicrosoftAccount' => fn(ParseNode $n) => $o->setPersonalMicrosoftAccount($n->getObjectValue([AudienceRestriction::class, 'createFromDiscriminatorValue'])),
        ];
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
     * Gets the personalMicrosoftAccount property value. Setting to allow or disallow creation of apps with personal Microsoft account signInAudience.
     * @return AudienceRestriction|null
    */
    public function getPersonalMicrosoftAccount(): ?AudienceRestriction {
        $val = $this->getBackingStore()->get('personalMicrosoftAccount');
        if (is_null($val) || $val instanceof AudienceRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'personalMicrosoftAccount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('azureAdMultipleOrgs', $this->getAzureAdMultipleOrgs());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('personalMicrosoftAccount', $this->getPersonalMicrosoftAccount());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the azureAdMultipleOrgs property value. Setting to allow or disallow creation of apps with multitenant signInAudience.
     * @param AzureAdMultipleOrgsAudienceRestriction|null $value Value to set for the azureAdMultipleOrgs property.
    */
    public function setAzureAdMultipleOrgs(?AzureAdMultipleOrgsAudienceRestriction $value): void {
        $this->getBackingStore()->set('azureAdMultipleOrgs', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the personalMicrosoftAccount property value. Setting to allow or disallow creation of apps with personal Microsoft account signInAudience.
     * @param AudienceRestriction|null $value Value to set for the personalMicrosoftAccount property.
    */
    public function setPersonalMicrosoftAccount(?AudienceRestriction $value): void {
        $this->getBackingStore()->set('personalMicrosoftAccount', $value);
    }

}
