<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CompliancePolicies\Item\SetScheduledActions;

use Microsoft\Graph\Beta\Generated\Models\DeviceManagementComplianceScheduledActionForRule;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SetScheduledActionsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new setScheduledActionsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetScheduledActionsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetScheduledActionsPostRequestBody {
        return new SetScheduledActionsPostRequestBody();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'scheduledActions' => fn(ParseNode $n) => $o->setScheduledActions($n->getCollectionOfObjectValues([DeviceManagementComplianceScheduledActionForRule::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the scheduledActions property value. The scheduledActions property
     * @return array<DeviceManagementComplianceScheduledActionForRule>|null
    */
    public function getScheduledActions(): ?array {
        return $this->getBackingStore()->get('scheduledActions');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('scheduledActions', $this->getScheduledActions());
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
     * Sets the scheduledActions property value. The scheduledActions property
     *  @param array<DeviceManagementComplianceScheduledActionForRule>|null $value Value to set for the scheduledActions property.
    */
    public function setScheduledActions(?array $value): void {
        $this->getBackingStore()->set('scheduledActions', $value);
    }

}
