<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InformationProtectionAction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * Instantiates a new informationProtectionAction and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InformationProtectionAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InformationProtectionAction {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.addContentFooterAction': return new AddContentFooterAction();
                case '#microsoft.graph.addContentHeaderAction': return new AddContentHeaderAction();
                case '#microsoft.graph.addWatermarkAction': return new AddWatermarkAction();
                case '#microsoft.graph.applyLabelAction': return new ApplyLabelAction();
                case '#microsoft.graph.customAction': return new CustomAction();
                case '#microsoft.graph.justifyAction': return new JustifyAction();
                case '#microsoft.graph.metadataAction': return new MetadataAction();
                case '#microsoft.graph.protectAdhocAction': return new ProtectAdhocAction();
                case '#microsoft.graph.protectByTemplateAction': return new ProtectByTemplateAction();
                case '#microsoft.graph.protectDoNotForwardAction': return new ProtectDoNotForwardAction();
                case '#microsoft.graph.recommendLabelAction': return new RecommendLabelAction();
                case '#microsoft.graph.removeContentFooterAction': return new RemoveContentFooterAction();
                case '#microsoft.graph.removeContentHeaderAction': return new RemoveContentHeaderAction();
                case '#microsoft.graph.removeProtectionAction': return new RemoveProtectionAction();
                case '#microsoft.graph.removeWatermarkAction': return new RemoveWatermarkAction();
            }
        }
        return new InformationProtectionAction();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

}
