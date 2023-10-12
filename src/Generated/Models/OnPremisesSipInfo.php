<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OnPremisesSipInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new onPremisesSipInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesSipInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesSipInfo {
        return new OnPremisesSipInfo();
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
            'isSipEnabled' => fn(ParseNode $n) => $o->setIsSipEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sipDeploymentLocation' => fn(ParseNode $n) => $o->setSipDeploymentLocation($n->getStringValue()),
            'sipPrimaryAddress' => fn(ParseNode $n) => $o->setSipPrimaryAddress($n->getStringValue()),
        ];
    }

    /**
     * Gets the isSipEnabled property value. Indicates whether the user is currently enabled for on-premises Skype for Business.
     * @return bool|null
    */
    public function getIsSipEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isSipEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSipEnabled'");
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
     * Gets the sipDeploymentLocation property value. Indicates a fully qualified DNS name of the Microsoft Online Communications Server deployment.
     * @return string|null
    */
    public function getSipDeploymentLocation(): ?string {
        $val = $this->getBackingStore()->get('sipDeploymentLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sipDeploymentLocation'");
    }

    /**
     * Gets the sipPrimaryAddress property value. Serves as a unique identifier for each user on the on-premises Skype for Business.
     * @return string|null
    */
    public function getSipPrimaryAddress(): ?string {
        $val = $this->getBackingStore()->get('sipPrimaryAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sipPrimaryAddress'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isSipEnabled', $this->getIsSipEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sipDeploymentLocation', $this->getSipDeploymentLocation());
        $writer->writeStringValue('sipPrimaryAddress', $this->getSipPrimaryAddress());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isSipEnabled property value. Indicates whether the user is currently enabled for on-premises Skype for Business.
     * @param bool|null $value Value to set for the isSipEnabled property.
    */
    public function setIsSipEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSipEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sipDeploymentLocation property value. Indicates a fully qualified DNS name of the Microsoft Online Communications Server deployment.
     * @param string|null $value Value to set for the sipDeploymentLocation property.
    */
    public function setSipDeploymentLocation(?string $value): void {
        $this->getBackingStore()->set('sipDeploymentLocation', $value);
    }

    /**
     * Sets the sipPrimaryAddress property value. Serves as a unique identifier for each user on the on-premises Skype for Business.
     * @param string|null $value Value to set for the sipPrimaryAddress property.
    */
    public function setSipPrimaryAddress(?string $value): void {
        $this->getBackingStore()->set('sipPrimaryAddress', $value);
    }

}
