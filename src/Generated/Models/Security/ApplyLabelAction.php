<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApplyLabelAction extends InformationProtectionAction implements Parsable 
{
    /**
     * @var array<InformationProtectionAction>|null $actions The collection of actions that should be implemented by the caller.
    */
    private ?array $actions = null;
    
    /**
     * @var ActionSource|null $actionSource The actionSource property
    */
    private ?ActionSource $actionSource = null;
    
    /**
     * @var array<string>|null $responsibleSensitiveTypeIds If the label was the result of an automatic classification, supply the list of sensitive info type GUIDs that resulted in the returned label.
    */
    private ?array $responsibleSensitiveTypeIds = null;
    
    /**
     * @var string|null $sensitivityLabelId The sensitivityLabelId property
    */
    private ?string $sensitivityLabelId = null;
    
    /**
     * Instantiates a new ApplyLabelAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.applyLabelAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplyLabelAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplyLabelAction {
        return new ApplyLabelAction();
    }

    /**
     * Gets the actions property value. The collection of actions that should be implemented by the caller.
     * @return array<InformationProtectionAction>|null
    */
    public function getActions(): ?array {
        return $this->actions;
    }

    /**
     * Gets the actionSource property value. The actionSource property
     * @return ActionSource|null
    */
    public function getActionSource(): ?ActionSource {
        return $this->actionSource;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actions' => function (ParseNode $n) use ($o) { $o->setActions($n->getCollectionOfObjectValues(array(InformationProtectionAction::class, 'createFromDiscriminatorValue'))); },
            'actionSource' => function (ParseNode $n) use ($o) { $o->setActionSource($n->getEnumValue(ActionSource::class)); },
            'responsibleSensitiveTypeIds' => function (ParseNode $n) use ($o) { $o->setResponsibleSensitiveTypeIds($n->getCollectionOfPrimitiveValues()); },
            'sensitivityLabelId' => function (ParseNode $n) use ($o) { $o->setSensitivityLabelId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the responsibleSensitiveTypeIds property value. If the label was the result of an automatic classification, supply the list of sensitive info type GUIDs that resulted in the returned label.
     * @return array<string>|null
    */
    public function getResponsibleSensitiveTypeIds(): ?array {
        return $this->responsibleSensitiveTypeIds;
    }

    /**
     * Gets the sensitivityLabelId property value. The sensitivityLabelId property
     * @return string|null
    */
    public function getSensitivityLabelId(): ?string {
        return $this->sensitivityLabelId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('actions', $this->actions);
        $writer->writeEnumValue('actionSource', $this->actionSource);
        $writer->writeCollectionOfPrimitiveValues('responsibleSensitiveTypeIds', $this->responsibleSensitiveTypeIds);
        $writer->writeStringValue('sensitivityLabelId', $this->sensitivityLabelId);
    }

    /**
     * Sets the actions property value. The collection of actions that should be implemented by the caller.
     *  @param array<InformationProtectionAction>|null $value Value to set for the actions property.
    */
    public function setActions(?array $value ): void {
        $this->actions = $value;
    }

    /**
     * Sets the actionSource property value. The actionSource property
     *  @param ActionSource|null $value Value to set for the actionSource property.
    */
    public function setActionSource(?ActionSource $value ): void {
        $this->actionSource = $value;
    }

    /**
     * Sets the responsibleSensitiveTypeIds property value. If the label was the result of an automatic classification, supply the list of sensitive info type GUIDs that resulted in the returned label.
     *  @param array<string>|null $value Value to set for the responsibleSensitiveTypeIds property.
    */
    public function setResponsibleSensitiveTypeIds(?array $value ): void {
        $this->responsibleSensitiveTypeIds = $value;
    }

    /**
     * Sets the sensitivityLabelId property value. The sensitivityLabelId property
     *  @param string|null $value Value to set for the sensitivityLabelId property.
    */
    public function setSensitivityLabelId(?string $value ): void {
        $this->sensitivityLabelId = $value;
    }

}
