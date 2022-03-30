<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Security;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InformationProtection extends Entity 
{
    /** @var InformationProtectionPolicySetting|null $labelPolicySettings  */
    private ?InformationProtectionPolicySetting $labelPolicySettings = null;
    
    /** @var array<SensitivityLabel>|null $sensitivityLabels  */
    private ?array $sensitivityLabels = null;
    
    /**
     * Instantiates a new informationProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InformationProtection
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): InformationProtection {
        return new InformationProtection();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'labelPolicySettings' => function (self $o, ParseNode $n) { $o->setLabelPolicySettings($n->getObjectValue(InformationProtectionPolicySetting::class)); },
            'sensitivityLabels' => function (self $o, ParseNode $n) { $o->setSensitivityLabels($n->getCollectionOfObjectValues(SensitivityLabel::class)); },
        ]);
    }

    /**
     * Gets the labelPolicySettings property value. 
     * @return InformationProtectionPolicySetting|null
    */
    public function getLabelPolicySettings(): ?InformationProtectionPolicySetting {
        return $this->labelPolicySettings;
    }

    /**
     * Gets the sensitivityLabels property value. 
     * @return array<SensitivityLabel>|null
    */
    public function getSensitivityLabels(): ?array {
        return $this->sensitivityLabels;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('labelPolicySettings', $this->labelPolicySettings);
        $writer->writeCollectionOfObjectValues('sensitivityLabels', $this->sensitivityLabels);
    }

    /**
     * Sets the labelPolicySettings property value. 
     *  @param InformationProtectionPolicySetting|null $value Value to set for the labelPolicySettings property.
    */
    public function setLabelPolicySettings(?InformationProtectionPolicySetting $value ): void {
        $this->labelPolicySettings = $value;
    }

    /**
     * Sets the sensitivityLabels property value. 
     *  @param array<SensitivityLabel>|null $value Value to set for the sensitivityLabels property.
    */
    public function setSensitivityLabels(?array $value ): void {
        $this->sensitivityLabels = $value;
    }

}
