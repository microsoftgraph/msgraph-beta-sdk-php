<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings\MicrosoftGraphApproveApps;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ApproveAppsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new approveAppsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApproveAppsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApproveAppsPostRequestBody {
        return new ApproveAppsPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the approveAllPermissions property value. The approveAllPermissions property
     * @return bool|null
    */
    public function getApproveAllPermissions(): ?bool {
        return $this->getBackingStore()->get('approveAllPermissions');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'approveAllPermissions' => fn(ParseNode $n) => $o->setApproveAllPermissions($n->getBooleanValue()),
            'packageIds' => fn(ParseNode $n) => $o->setPackageIds($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the packageIds property value. The packageIds property
     * @return array<string>|null
    */
    public function getPackageIds(): ?array {
        return $this->getBackingStore()->get('packageIds');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('approveAllPermissions', $this->getApproveAllPermissions());
        $writer->writeCollectionOfPrimitiveValues('packageIds', $this->getPackageIds());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the approveAllPermissions property value. The approveAllPermissions property
     * @param bool|null $value Value to set for the approveAllPermissions property.
    */
    public function setApproveAllPermissions(?bool $value): void {
        $this->getBackingStore()->set('approveAllPermissions', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the packageIds property value. The packageIds property
     * @param array<string>|null $value Value to set for the packageIds property.
    */
    public function setPackageIds(?array $value): void {
        $this->getBackingStore()->set('packageIds', $value);
    }

}
