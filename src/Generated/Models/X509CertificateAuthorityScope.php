<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class X509CertificateAuthorityScope implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new X509CertificateAuthorityScope and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return X509CertificateAuthorityScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): X509CertificateAuthorityScope {
        return new X509CertificateAuthorityScope();
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
            'includeTargets' => fn(ParseNode $n) => $o->setIncludeTargets($n->getCollectionOfObjectValues([IncludeTarget::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'publicKeyInfrastructureIdentifier' => fn(ParseNode $n) => $o->setPublicKeyInfrastructureIdentifier($n->getStringValue()),
            'subjectKeyIdentifier' => fn(ParseNode $n) => $o->setSubjectKeyIdentifier($n->getStringValue()),
        ];
    }

    /**
     * Gets the includeTargets property value. A collection of groups that are enabled to be in scope to use certificates issued by specific certificate authority.
     * @return array<IncludeTarget>|null
    */
    public function getIncludeTargets(): ?array {
        $val = $this->getBackingStore()->get('includeTargets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IncludeTarget::class);
            /** @var array<IncludeTarget>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeTargets'");
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
     * Gets the publicKeyInfrastructureIdentifier property value. Public Key Infrastructure container object under which the certificate authorities are stored in the Entra PKI based trust store.
     * @return string|null
    */
    public function getPublicKeyInfrastructureIdentifier(): ?string {
        $val = $this->getBackingStore()->get('publicKeyInfrastructureIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publicKeyInfrastructureIdentifier'");
    }

    /**
     * Gets the subjectKeyIdentifier property value. Subject Key Identifier that identifies the certificate authority uniquely.
     * @return string|null
    */
    public function getSubjectKeyIdentifier(): ?string {
        $val = $this->getBackingStore()->get('subjectKeyIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjectKeyIdentifier'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('includeTargets', $this->getIncludeTargets());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('publicKeyInfrastructureIdentifier', $this->getPublicKeyInfrastructureIdentifier());
        $writer->writeStringValue('subjectKeyIdentifier', $this->getSubjectKeyIdentifier());
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
     * Sets the includeTargets property value. A collection of groups that are enabled to be in scope to use certificates issued by specific certificate authority.
     * @param array<IncludeTarget>|null $value Value to set for the includeTargets property.
    */
    public function setIncludeTargets(?array $value): void {
        $this->getBackingStore()->set('includeTargets', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the publicKeyInfrastructureIdentifier property value. Public Key Infrastructure container object under which the certificate authorities are stored in the Entra PKI based trust store.
     * @param string|null $value Value to set for the publicKeyInfrastructureIdentifier property.
    */
    public function setPublicKeyInfrastructureIdentifier(?string $value): void {
        $this->getBackingStore()->set('publicKeyInfrastructureIdentifier', $value);
    }

    /**
     * Sets the subjectKeyIdentifier property value. Subject Key Identifier that identifies the certificate authority uniquely.
     * @param string|null $value Value to set for the subjectKeyIdentifier property.
    */
    public function setSubjectKeyIdentifier(?string $value): void {
        $this->getBackingStore()->set('subjectKeyIdentifier', $value);
    }

}
