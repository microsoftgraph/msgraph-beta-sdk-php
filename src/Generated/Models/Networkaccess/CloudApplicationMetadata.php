<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudApplicationMetadata implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudApplicationMetadata and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudApplicationMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudApplicationMetadata {
        return new CloudApplicationMetadata();
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
     * Gets the category property value. The category property
     * @return CloudApplicationCategory|null
    */
    public function getCategory(): ?CloudApplicationCategory {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof CloudApplicationCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the cloudApplicationCatalogId property value. The ID of the application in the SaaS application catalog.
     * @return string|null
    */
    public function getCloudApplicationCatalogId(): ?string {
        $val = $this->getBackingStore()->get('cloudApplicationCatalogId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudApplicationCatalogId'");
    }

    /**
     * Gets the complianceScore property value. The compliance score of the application.
     * @return int|null
    */
    public function getComplianceScore(): ?int {
        $val = $this->getBackingStore()->get('complianceScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complianceScore'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(CloudApplicationCategory::class)),
            'cloudApplicationCatalogId' => fn(ParseNode $n) => $o->setCloudApplicationCatalogId($n->getStringValue()),
            'complianceScore' => fn(ParseNode $n) => $o->setComplianceScore($n->getIntegerValue()),
            'generalScore' => fn(ParseNode $n) => $o->setGeneralScore($n->getIntegerValue()),
            'legalScore' => fn(ParseNode $n) => $o->setLegalScore($n->getIntegerValue()),
            'loginUser' => fn(ParseNode $n) => $o->setLoginUser($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'riskScore' => fn(ParseNode $n) => $o->setRiskScore($n->getIntegerValue()),
            'securityScore' => fn(ParseNode $n) => $o->setSecurityScore($n->getIntegerValue()),
            'subactivity' => fn(ParseNode $n) => $o->setSubactivity($n->getStringValue()),
        ];
    }

    /**
     * Gets the generalScore property value. The general score of the application.
     * @return int|null
    */
    public function getGeneralScore(): ?int {
        $val = $this->getBackingStore()->get('generalScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'generalScore'");
    }

    /**
     * Gets the legalScore property value. The legal score of the application.
     * @return int|null
    */
    public function getLegalScore(): ?int {
        $val = $this->getBackingStore()->get('legalScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'legalScore'");
    }

    /**
     * Gets the loginUser property value. The username that was used to log into the application.
     * @return string|null
    */
    public function getLoginUser(): ?string {
        $val = $this->getBackingStore()->get('loginUser');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'loginUser'");
    }

    /**
     * Gets the name property value. The name of the application (e.g., ChatGPT, Salesforce, Bing).
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
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
     * Gets the riskScore property value. The risk score of the application.
     * @return int|null
    */
    public function getRiskScore(): ?int {
        $val = $this->getBackingStore()->get('riskScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskScore'");
    }

    /**
     * Gets the securityScore property value. The security score of the application.
     * @return int|null
    */
    public function getSecurityScore(): ?int {
        $val = $this->getBackingStore()->get('securityScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityScore'");
    }

    /**
     * Gets the subactivity property value. The subactivity property
     * @return string|null
    */
    public function getSubactivity(): ?string {
        $val = $this->getBackingStore()->get('subactivity');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subactivity'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeStringValue('cloudApplicationCatalogId', $this->getCloudApplicationCatalogId());
        $writer->writeIntegerValue('complianceScore', $this->getComplianceScore());
        $writer->writeIntegerValue('generalScore', $this->getGeneralScore());
        $writer->writeIntegerValue('legalScore', $this->getLegalScore());
        $writer->writeStringValue('loginUser', $this->getLoginUser());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('riskScore', $this->getRiskScore());
        $writer->writeIntegerValue('securityScore', $this->getSecurityScore());
        $writer->writeStringValue('subactivity', $this->getSubactivity());
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
     * Sets the category property value. The category property
     * @param CloudApplicationCategory|null $value Value to set for the category property.
    */
    public function setCategory(?CloudApplicationCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the cloudApplicationCatalogId property value. The ID of the application in the SaaS application catalog.
     * @param string|null $value Value to set for the cloudApplicationCatalogId property.
    */
    public function setCloudApplicationCatalogId(?string $value): void {
        $this->getBackingStore()->set('cloudApplicationCatalogId', $value);
    }

    /**
     * Sets the complianceScore property value. The compliance score of the application.
     * @param int|null $value Value to set for the complianceScore property.
    */
    public function setComplianceScore(?int $value): void {
        $this->getBackingStore()->set('complianceScore', $value);
    }

    /**
     * Sets the generalScore property value. The general score of the application.
     * @param int|null $value Value to set for the generalScore property.
    */
    public function setGeneralScore(?int $value): void {
        $this->getBackingStore()->set('generalScore', $value);
    }

    /**
     * Sets the legalScore property value. The legal score of the application.
     * @param int|null $value Value to set for the legalScore property.
    */
    public function setLegalScore(?int $value): void {
        $this->getBackingStore()->set('legalScore', $value);
    }

    /**
     * Sets the loginUser property value. The username that was used to log into the application.
     * @param string|null $value Value to set for the loginUser property.
    */
    public function setLoginUser(?string $value): void {
        $this->getBackingStore()->set('loginUser', $value);
    }

    /**
     * Sets the name property value. The name of the application (e.g., ChatGPT, Salesforce, Bing).
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the riskScore property value. The risk score of the application.
     * @param int|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?int $value): void {
        $this->getBackingStore()->set('riskScore', $value);
    }

    /**
     * Sets the securityScore property value. The security score of the application.
     * @param int|null $value Value to set for the securityScore property.
    */
    public function setSecurityScore(?int $value): void {
        $this->getBackingStore()->set('securityScore', $value);
    }

    /**
     * Sets the subactivity property value. The subactivity property
     * @param string|null $value Value to set for the subactivity property.
    */
    public function setSubactivity(?string $value): void {
        $this->getBackingStore()->set('subactivity', $value);
    }

}
