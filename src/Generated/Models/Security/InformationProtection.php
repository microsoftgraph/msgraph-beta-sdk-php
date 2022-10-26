<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InformationProtection extends Entity implements Parsable 
{
    /**
     * @var InformationProtectionPolicySetting|null $labelPolicySettings Read the Microsoft Purview Information Protection policy settings for the user or organization.
    */
    private ?InformationProtectionPolicySetting $labelPolicySettings = null;
    
    /**
     * @var array<SensitivityLabel>|null $sensitivityLabels Read the Microsoft Purview Information Protection labels for the user or organization.
    */
    private ?array $sensitivityLabels = null;
    
    /**
     * Instantiates a new informationProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.informationProtection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InformationProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InformationProtection {
        return new InformationProtection();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'labelPolicySettings' => fn(ParseNode $n) => $o->setLabelPolicySettings($n->getObjectValue([InformationProtectionPolicySetting::class, 'createFromDiscriminatorValue'])),
            'sensitivityLabels' => fn(ParseNode $n) => $o->setSensitivityLabels($n->getCollectionOfObjectValues([SensitivityLabel::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the labelPolicySettings property value. Read the Microsoft Purview Information Protection policy settings for the user or organization.
     * @return InformationProtectionPolicySetting|null
    */
    public function getLabelPolicySettings(): ?InformationProtectionPolicySetting {
        return $this->labelPolicySettings;
    }

    /**
     * Gets the sensitivityLabels property value. Read the Microsoft Purview Information Protection labels for the user or organization.
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
     * Sets the labelPolicySettings property value. Read the Microsoft Purview Information Protection policy settings for the user or organization.
     *  @param InformationProtectionPolicySetting|null $value Value to set for the labelPolicySettings property.
    */
    public function setLabelPolicySettings(?InformationProtectionPolicySetting $value ): void {
        $this->labelPolicySettings = $value;
    }

    /**
     * Sets the sensitivityLabels property value. Read the Microsoft Purview Information Protection labels for the user or organization.
     *  @param array<SensitivityLabel>|null $value Value to set for the sensitivityLabels property.
    */
    public function setSensitivityLabels(?array $value ): void {
        $this->sensitivityLabels = $value;
    }

}
