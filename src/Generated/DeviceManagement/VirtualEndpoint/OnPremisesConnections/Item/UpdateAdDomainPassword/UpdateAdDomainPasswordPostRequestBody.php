<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\OnPremisesConnections\Item\UpdateAdDomainPassword;

use Microsoft\Graph\Beta\Generated\Models\CloudPcDomainJoinCredential;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UpdateAdDomainPasswordPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UpdateAdDomainPasswordPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateAdDomainPasswordPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateAdDomainPasswordPostRequestBody {
        return new UpdateAdDomainPasswordPostRequestBody();
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
     * Gets the adDomainPassword property value. The adDomainPassword property
     * @return string|null
    */
    public function getAdDomainPassword(): ?string {
        $val = $this->getBackingStore()->get('adDomainPassword');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adDomainPassword'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the domainJoinCredential property value. The domainJoinCredential property
     * @return CloudPcDomainJoinCredential|null
    */
    public function getDomainJoinCredential(): ?CloudPcDomainJoinCredential {
        $val = $this->getBackingStore()->get('domainJoinCredential');
        if (is_null($val) || $val instanceof CloudPcDomainJoinCredential) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainJoinCredential'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adDomainPassword' => fn(ParseNode $n) => $o->setAdDomainPassword($n->getStringValue()),
            'domainJoinCredential' => fn(ParseNode $n) => $o->setDomainJoinCredential($n->getObjectValue([CloudPcDomainJoinCredential::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adDomainPassword', $this->getAdDomainPassword());
        $writer->writeObjectValue('domainJoinCredential', $this->getDomainJoinCredential());
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
     * Sets the adDomainPassword property value. The adDomainPassword property
     * @param string|null $value Value to set for the adDomainPassword property.
    */
    public function setAdDomainPassword(?string $value): void {
        $this->getBackingStore()->set('adDomainPassword', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the domainJoinCredential property value. The domainJoinCredential property
     * @param CloudPcDomainJoinCredential|null $value Value to set for the domainJoinCredential property.
    */
    public function setDomainJoinCredential(?CloudPcDomainJoinCredential $value): void {
        $this->getBackingStore()->set('domainJoinCredential', $value);
    }

}
