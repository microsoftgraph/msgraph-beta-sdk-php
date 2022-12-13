<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecommendLabelAction extends InformationProtectionAction implements Parsable 
{
    /**
     * Instantiates a new RecommendLabelAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.recommendLabelAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecommendLabelAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecommendLabelAction {
        return new RecommendLabelAction();
    }

    /**
     * Gets the actions property value. Actions to take if the label is accepted by the user.
     * @return array<InformationProtectionAction>|null
    */
    public function getActions(): ?array {
        return $this->getBackingStore()->get('actions');
    }

    /**
     * Gets the actionSource property value. The actionSource property
     * @return ActionSource|null
    */
    public function getActionSource(): ?ActionSource {
        return $this->getBackingStore()->get('actionSource');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actions' => fn(ParseNode $n) => $o->setActions($n->getCollectionOfObjectValues([InformationProtectionAction::class, 'createFromDiscriminatorValue'])),
            'actionSource' => fn(ParseNode $n) => $o->setActionSource($n->getEnumValue(ActionSource::class)),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getObjectValue([LabelDetails::class, 'createFromDiscriminatorValue'])),
            'responsibleSensitiveTypeIds' => fn(ParseNode $n) => $o->setResponsibleSensitiveTypeIds($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the label property value. The label that is being recommended.
     * @return LabelDetails|null
    */
    public function getLabel(): ?LabelDetails {
        return $this->getBackingStore()->get('label');
    }

    /**
     * Gets the responsibleSensitiveTypeIds property value. The sensitive information type GUIDs that caused the recommendation to be given.
     * @return array<Guid>|null
    */
    public function getResponsibleSensitiveTypeIds(): ?array {
        return $this->getBackingStore()->get('responsibleSensitiveTypeIds');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('actions', $this->getActions());
        $writer->writeEnumValue('actionSource', $this->getActionSource());
        $writer->writeObjectValue('label', $this->getLabel());
        $writer->writeCollectionOfPrimitiveValues('responsibleSensitiveTypeIds', $this->getResponsibleSensitiveTypeIds());
    }

    /**
     * Sets the actions property value. Actions to take if the label is accepted by the user.
     *  @param array<InformationProtectionAction>|null $value Value to set for the actions property.
    */
    public function setActions(?array $value): void {
        $this->getBackingStore()->set('actions', $value);
    }

    /**
     * Sets the actionSource property value. The actionSource property
     *  @param ActionSource|null $value Value to set for the actionSource property.
    */
    public function setActionSource(?ActionSource $value): void {
        $this->getBackingStore()->set('actionSource', $value);
    }

    /**
     * Sets the label property value. The label that is being recommended.
     *  @param LabelDetails|null $value Value to set for the label property.
    */
    public function setLabel(?LabelDetails $value): void {
        $this->getBackingStore()->set('label', $value);
    }

    /**
     * Sets the responsibleSensitiveTypeIds property value. The sensitive information type GUIDs that caused the recommendation to be given.
     *  @param array<Guid>|null $value Value to set for the responsibleSensitiveTypeIds property.
    */
    public function setResponsibleSensitiveTypeIds(?array $value): void {
        $this->getBackingStore()->set('responsibleSensitiveTypeIds', $value);
    }

}
