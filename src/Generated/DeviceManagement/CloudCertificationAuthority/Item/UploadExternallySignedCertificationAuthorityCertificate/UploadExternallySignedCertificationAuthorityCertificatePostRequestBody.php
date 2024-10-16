<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\UploadExternallySignedCertificationAuthorityCertificate;

use Microsoft\Graph\Beta\Generated\Models\TrustChainCertificate;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UploadExternallySignedCertificationAuthorityCertificatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UploadExternallySignedCertificationAuthorityCertificatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UploadExternallySignedCertificationAuthorityCertificatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UploadExternallySignedCertificationAuthorityCertificatePostRequestBody {
        return new UploadExternallySignedCertificationAuthorityCertificatePostRequestBody();
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
            'certificationAuthorityVersion' => fn(ParseNode $n) => $o->setCertificationAuthorityVersion($n->getIntegerValue()),
            'signedCertificate' => fn(ParseNode $n) => $o->setSignedCertificate($n->getStringValue()),
            'trustChainCertificates' => fn(ParseNode $n) => $o->setTrustChainCertificates($n->getCollectionOfObjectValues([TrustChainCertificate::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the signedCertificate property value. The signedCertificate property
     * @return string|null
    */
    public function getSignedCertificate(): ?string {
        $val = $this->getBackingStore()->get('signedCertificate');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signedCertificate'");
    }

    /**
     * Gets the trustChainCertificates property value. The trustChainCertificates property
     * @return array<TrustChainCertificate>|null
    */
    public function getTrustChainCertificates(): ?array {
        $val = $this->getBackingStore()->get('trustChainCertificates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TrustChainCertificate::class);
            /** @var array<TrustChainCertificate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trustChainCertificates'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('certificationAuthorityVersion', $this->getCertificationAuthorityVersion());
        $writer->writeStringValue('signedCertificate', $this->getSignedCertificate());
        $writer->writeCollectionOfObjectValues('trustChainCertificates', $this->getTrustChainCertificates());
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
     * Sets the certificationAuthorityVersion property value. The certificationAuthorityVersion property
     * @param int|null $value Value to set for the certificationAuthorityVersion property.
    */
    public function setCertificationAuthorityVersion(?int $value): void {
        $this->getBackingStore()->set('certificationAuthorityVersion', $value);
    }

    /**
     * Sets the signedCertificate property value. The signedCertificate property
     * @param string|null $value Value to set for the signedCertificate property.
    */
    public function setSignedCertificate(?string $value): void {
        $this->getBackingStore()->set('signedCertificate', $value);
    }

    /**
     * Sets the trustChainCertificates property value. The trustChainCertificates property
     * @param array<TrustChainCertificate>|null $value Value to set for the trustChainCertificates property.
    */
    public function setTrustChainCertificates(?array $value): void {
        $this->getBackingStore()->set('trustChainCertificates', $value);
    }

}
