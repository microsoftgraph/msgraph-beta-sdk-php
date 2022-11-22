<?php

namespace Microsoft\Graph\Beta\Generated\OfficeConfiguration\ClientConfigurations\UpdatePriorities;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UpdatePrioritiesPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new updatePrioritiesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdatePrioritiesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdatePrioritiesPostRequestBody {
        return new UpdatePrioritiesPostRequestBody();
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
            'officeConfigurationPolicyIds' => fn(ParseNode $n) => $o->setOfficeConfigurationPolicyIds($n->getCollectionOfPrimitiveValues()),
            'officeConfigurationPriorities' => fn(ParseNode $n) => $o->setOfficeConfigurationPriorities($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the officeConfigurationPolicyIds property value. The officeConfigurationPolicyIds property
     * @return array<string>|null
    */
    public function getOfficeConfigurationPolicyIds(): ?array {
        return $this->getBackingStore()->get('officeConfigurationPolicyIds');
    }

    /**
     * Gets the officeConfigurationPriorities property value. The officeConfigurationPriorities property
     * @return array<int>|null
    */
    public function getOfficeConfigurationPriorities(): ?array {
        return $this->getBackingStore()->get('officeConfigurationPriorities');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('officeConfigurationPolicyIds', $this->getOfficeConfigurationPolicyIds());
        $writer->writeCollectionOfPrimitiveValues('officeConfigurationPriorities', $this->getOfficeConfigurationPriorities());
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
     * Sets the officeConfigurationPolicyIds property value. The officeConfigurationPolicyIds property
     *  @param array<string>|null $value Value to set for the officeConfigurationPolicyIds property.
    */
    public function setOfficeConfigurationPolicyIds(?array $value): void {
        $this->getBackingStore()->set('officeConfigurationPolicyIds', $value);
    }

    /**
     * Sets the officeConfigurationPriorities property value. The officeConfigurationPriorities property
     *  @param array<int>|null $value Value to set for the officeConfigurationPriorities property.
    */
    public function setOfficeConfigurationPriorities(?array $value): void {
        $this->getBackingStore()->set('officeConfigurationPriorities', $value);
    }

}
