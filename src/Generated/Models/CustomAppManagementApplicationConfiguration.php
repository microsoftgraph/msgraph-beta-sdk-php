<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CustomAppManagementApplicationConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CustomAppManagementApplicationConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomAppManagementApplicationConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomAppManagementApplicationConfiguration {
        return new CustomAppManagementApplicationConfiguration();
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
     * Gets the audiences property value. Property to restrict creation or update of apps based on their target signInAudience types.
     * @return AudiencesConfiguration|null
    */
    public function getAudiences(): ?AudiencesConfiguration {
        $val = $this->getBackingStore()->get('audiences');
        if (is_null($val) || $val instanceof AudiencesConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'audiences'");
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
            'audiences' => fn(ParseNode $n) => $o->setAudiences($n->getObjectValue([AudiencesConfiguration::class, 'createFromDiscriminatorValue'])),
            'identifierUris' => fn(ParseNode $n) => $o->setIdentifierUris($n->getObjectValue([IdentifierUriConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the identifierUris property value. Configuration for identifierUris restrictions.
     * @return IdentifierUriConfiguration|null
    */
    public function getIdentifierUris(): ?IdentifierUriConfiguration {
        $val = $this->getBackingStore()->get('identifierUris');
        if (is_null($val) || $val instanceof IdentifierUriConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identifierUris'");
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
        $writer->writeObjectValue('audiences', $this->getAudiences());
        $writer->writeObjectValue('identifierUris', $this->getIdentifierUris());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the audiences property value. Property to restrict creation or update of apps based on their target signInAudience types.
     * @param AudiencesConfiguration|null $value Value to set for the audiences property.
    */
    public function setAudiences(?AudiencesConfiguration $value): void {
        $this->getBackingStore()->set('audiences', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the identifierUris property value. Configuration for identifierUris restrictions.
     * @param IdentifierUriConfiguration|null $value Value to set for the identifierUris property.
    */
    public function setIdentifierUris(?IdentifierUriConfiguration $value): void {
        $this->getBackingStore()->set('identifierUris', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
