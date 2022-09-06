<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\CustomExtensionData;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomTaskExtensionCallbackData extends CustomExtensionData implements Parsable 
{
    /**
     * @var CustomTaskExtensionOperationStatus|null $operationStatus Operation status that's provided by the Azure Logic App indicating whenever the Azure Logic App has run successfully or not. Supported values: completed, failed, unknownFutureValue.
    */
    private ?CustomTaskExtensionOperationStatus $operationStatus = null;
    
    /**
     * Instantiates a new CustomTaskExtensionCallbackData and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.customTaskExtensionCallbackData');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomTaskExtensionCallbackData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomTaskExtensionCallbackData {
        return new CustomTaskExtensionCallbackData();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'operationStatus' => function (ParseNode $n) use ($o) { $o->setOperationStatus($n->getEnumValue(CustomTaskExtensionOperationStatus::class)); },
        ]);
    }

    /**
     * Gets the operationStatus property value. Operation status that's provided by the Azure Logic App indicating whenever the Azure Logic App has run successfully or not. Supported values: completed, failed, unknownFutureValue.
     * @return CustomTaskExtensionOperationStatus|null
    */
    public function getOperationStatus(): ?CustomTaskExtensionOperationStatus {
        return $this->operationStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('operationStatus', $this->operationStatus);
    }

    /**
     * Sets the operationStatus property value. Operation status that's provided by the Azure Logic App indicating whenever the Azure Logic App has run successfully or not. Supported values: completed, failed, unknownFutureValue.
     *  @param CustomTaskExtensionOperationStatus|null $value Value to set for the operationStatus property.
    */
    public function setOperationStatus(?CustomTaskExtensionOperationStatus $value ): void {
        $this->operationStatus = $value;
    }

}
