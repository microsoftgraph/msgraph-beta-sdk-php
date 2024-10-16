<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\ChangeCloudCertificationAuthorityStatus;

use Microsoft\Graph\Beta\Generated\Models\CloudCertificationAuthorityStatus;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ChangeCloudCertificationAuthorityStatusPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ChangeCloudCertificationAuthorityStatusPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChangeCloudCertificationAuthorityStatusPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChangeCloudCertificationAuthorityStatusPostRequestBody {
        return new ChangeCloudCertificationAuthorityStatusPostRequestBody();
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
     * Gets the certificationAuthorityStatus property value. Enum type of possible certification authority statuses. These statuses indicate whether a certification authority is currently able to issue certificates or temporarily paused or permanently revoked.
     * @return CloudCertificationAuthorityStatus|null
    */
    public function getCertificationAuthorityStatus(): ?CloudCertificationAuthorityStatus {
        $val = $this->getBackingStore()->get('certificationAuthorityStatus');
        if (is_null($val) || $val instanceof CloudCertificationAuthorityStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificationAuthorityStatus'");
    }

    /**
     * Gets the certificationAuthorityVersion property value. The certificationAuthorityVersion property
     * @return int|null
    */
    public function getCertificationAuthorityVersion(): ?int {
        $val = $this->getBackingStore()->get('certificationAuthorityVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificationAuthorityVersion'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'certificationAuthorityStatus' => fn(ParseNode $n) => $o->setCertificationAuthorityStatus($n->getEnumValue(CloudCertificationAuthorityStatus::class)),
            'certificationAuthorityVersion' => fn(ParseNode $n) => $o->setCertificationAuthorityVersion($n->getIntegerValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('certificationAuthorityStatus', $this->getCertificationAuthorityStatus());
        $writer->writeIntegerValue('certificationAuthorityVersion', $this->getCertificationAuthorityVersion());
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
     * Sets the certificationAuthorityStatus property value. Enum type of possible certification authority statuses. These statuses indicate whether a certification authority is currently able to issue certificates or temporarily paused or permanently revoked.
     * @param CloudCertificationAuthorityStatus|null $value Value to set for the certificationAuthorityStatus property.
    */
    public function setCertificationAuthorityStatus(?CloudCertificationAuthorityStatus $value): void {
        $this->getBackingStore()->set('certificationAuthorityStatus', $value);
    }

    /**
     * Sets the certificationAuthorityVersion property value. The certificationAuthorityVersion property
     * @param int|null $value Value to set for the certificationAuthorityVersion property.
    */
    public function setCertificationAuthorityVersion(?int $value): void {
        $this->getBackingStore()->set('certificationAuthorityVersion', $value);
    }

}
