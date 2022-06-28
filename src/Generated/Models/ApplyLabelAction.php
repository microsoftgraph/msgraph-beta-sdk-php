<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApplyLabelAction extends InformationProtectionAction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<InformationProtectionAction>|null $actions The collection of specific actions that should be taken by the consuming application to label the document. See  informationProtectionAction for the full list.
    */
    private ?array $actions = null;
    
    /**
     * @var ActionSource|null $actionSource Possible values are: manual, automatic, recommended, default.
    */
    private ?ActionSource $actionSource = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var LabelDetails|null $label Object that describes the details of the label to apply.
    */
    private ?LabelDetails $label = null;
    
    /**
     * @var array<string>|null $responsibleSensitiveTypeIds If the label was the result of an automatic classification, supply the list of sensitive info type GUIDs that resulted in the returned label.
    */
    private ?array $responsibleSensitiveTypeIds = null;
    
    /**
     * Instantiates a new ApplyLabelAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the actions property value. The collection of specific actions that should be taken by the consuming application to label the document. See  informationProtectionAction for the full list.
     * @return array<InformationProtectionAction>|null
    */
    public function getActions(): ?array {
        return $this->actions;
    }

    /**
     * Gets the actionSource property value. Possible values are: manual, automatic, recommended, default.
     * @return ActionSource|null
    */
    public function getActionSource(): ?ActionSource {
        return $this->actionSource;
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
        return array_merge(parent::getFieldDeserializers(), [
            'actions' => function (ParseNode $n) use ($o) { $o->setActions($n->getCollectionOfObjectValues(array(InformationProtectionAction::class, 'createFromDiscriminatorValue'))); },
            'actionSource' => function (ParseNode $n) use ($o) { $o->setActionSource($n->getEnumValue(ActionSource::class)); },
            'label' => function (ParseNode $n) use ($o) { $o->setLabel($n->getObjectValue(array(LabelDetails::class, 'createFromDiscriminatorValue'))); },
            'responsibleSensitiveTypeIds' => function (ParseNode $n) use ($o) { $o->setResponsibleSensitiveTypeIds($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the label property value. Object that describes the details of the label to apply.
     * @return LabelDetails|null
    */
    public function getLabel(): ?LabelDetails {
        return $this->label;
    }

    /**
     * Gets the responsibleSensitiveTypeIds property value. If the label was the result of an automatic classification, supply the list of sensitive info type GUIDs that resulted in the returned label.
     * @return array<string>|null
    */
    public function getResponsibleSensitiveTypeIds(): ?array {
        return $this->responsibleSensitiveTypeIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('actions', $this->actions);
        $writer->writeEnumValue('actionSource', $this->actionSource);
        $writer->writeObjectValue('label', $this->label);
        $writer->writeCollectionOfPrimitiveValues('responsibleSensitiveTypeIds', $this->responsibleSensitiveTypeIds);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actions property value. The collection of specific actions that should be taken by the consuming application to label the document. See  informationProtectionAction for the full list.
     *  @param array<InformationProtectionAction>|null $value Value to set for the actions property.
    */
    public function setActions(?array $value ): void {
        $this->actions = $value;
    }

    /**
     * Sets the actionSource property value. Possible values are: manual, automatic, recommended, default.
     *  @param ActionSource|null $value Value to set for the actionSource property.
    */
    public function setActionSource(?ActionSource $value ): void {
        $this->actionSource = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the label property value. Object that describes the details of the label to apply.
     *  @param LabelDetails|null $value Value to set for the label property.
    */
    public function setLabel(?LabelDetails $value ): void {
        $this->label = $value;
    }

    /**
     * Sets the responsibleSensitiveTypeIds property value. If the label was the result of an automatic classification, supply the list of sensitive info type GUIDs that resulted in the returned label.
     *  @param array<string>|null $value Value to set for the responsibleSensitiveTypeIds property.
    */
    public function setResponsibleSensitiveTypeIds(?array $value ): void {
        $this->responsibleSensitiveTypeIds = $value;
    }

}
