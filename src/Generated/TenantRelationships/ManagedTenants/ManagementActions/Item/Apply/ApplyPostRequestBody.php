<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActions\Item\Apply;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ApplyPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new applyPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplyPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplyPostRequestBody {
        return new ApplyPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the excludeGroups property value. The excludeGroups property
     * @return array<string>|null
    */
    public function getExcludeGroups(): ?array {
        return $this->getBackingStore()->get('excludeGroups');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeGroups' => fn(ParseNode $n) => $o->setExcludeGroups($n->getCollectionOfPrimitiveValues()),
            'includeAllUsers' => fn(ParseNode $n) => $o->setIncludeAllUsers($n->getBooleanValue()),
            'includeGroups' => fn(ParseNode $n) => $o->setIncludeGroups($n->getCollectionOfPrimitiveValues()),
            'managementTemplateId' => fn(ParseNode $n) => $o->setManagementTemplateId($n->getStringValue()),
            'tenantGroupId' => fn(ParseNode $n) => $o->setTenantGroupId($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ];
    }

    /**
     * Gets the includeAllUsers property value. The includeAllUsers property
     * @return bool|null
    */
    public function getIncludeAllUsers(): ?bool {
        return $this->getBackingStore()->get('includeAllUsers');
    }

    /**
     * Gets the includeGroups property value. The includeGroups property
     * @return array<string>|null
    */
    public function getIncludeGroups(): ?array {
        return $this->getBackingStore()->get('includeGroups');
    }

    /**
     * Gets the managementTemplateId property value. The managementTemplateId property
     * @return string|null
    */
    public function getManagementTemplateId(): ?string {
        return $this->getBackingStore()->get('managementTemplateId');
    }

    /**
     * Gets the tenantGroupId property value. The tenantGroupId property
     * @return string|null
    */
    public function getTenantGroupId(): ?string {
        return $this->getBackingStore()->get('tenantGroupId');
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('excludeGroups', $this->getExcludeGroups());
        $writer->writeBooleanValue('includeAllUsers', $this->getIncludeAllUsers());
        $writer->writeCollectionOfPrimitiveValues('includeGroups', $this->getIncludeGroups());
        $writer->writeStringValue('managementTemplateId', $this->getManagementTemplateId());
        $writer->writeStringValue('tenantGroupId', $this->getTenantGroupId());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the excludeGroups property value. The excludeGroups property
     *  @param array<string>|null $value Value to set for the excludeGroups property.
    */
    public function setExcludeGroups(?array $value): void {
        $this->getBackingStore()->set('excludeGroups', $value);
    }

    /**
     * Sets the includeAllUsers property value. The includeAllUsers property
     *  @param bool|null $value Value to set for the includeAllUsers property.
    */
    public function setIncludeAllUsers(?bool $value): void {
        $this->getBackingStore()->set('includeAllUsers', $value);
    }

    /**
     * Sets the includeGroups property value. The includeGroups property
     *  @param array<string>|null $value Value to set for the includeGroups property.
    */
    public function setIncludeGroups(?array $value): void {
        $this->getBackingStore()->set('includeGroups', $value);
    }

    /**
     * Sets the managementTemplateId property value. The managementTemplateId property
     *  @param string|null $value Value to set for the managementTemplateId property.
    */
    public function setManagementTemplateId(?string $value): void {
        $this->getBackingStore()->set('managementTemplateId', $value);
    }

    /**
     * Sets the tenantGroupId property value. The tenantGroupId property
     *  @param string|null $value Value to set for the tenantGroupId property.
    */
    public function setTenantGroupId(?string $value): void {
        $this->getBackingStore()->set('tenantGroupId', $value);
    }

    /**
     * Sets the tenantId property value. The tenantId property
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
