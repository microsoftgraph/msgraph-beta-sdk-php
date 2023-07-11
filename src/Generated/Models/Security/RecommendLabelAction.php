<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RecommendLabelAction extends InformationProtectionAction implements Parsable 
{
    /**
     * Instantiates a new recommendLabelAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.recommendLabelAction');
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
        $val = $this->getBackingStore()->get('actions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, InformationProtectionAction::class);
            /** @var array<InformationProtectionAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actions'");
    }

    /**
     * Gets the actionSource property value. The actionSource property
     * @return ActionSource|null
    */
    public function getActionSource(): ?ActionSource {
        $val = $this->getBackingStore()->get('actionSource');
        if (is_null($val) || $val instanceof ActionSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionSource'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actions' => fn(ParseNode $n) => $o->setActions($n->getCollectionOfObjectValues([InformationProtectionAction::class, 'createFromDiscriminatorValue'])),
            'actionSource' => fn(ParseNode $n) => $o->setActionSource($n->getEnumValue(ActionSource::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'responsibleSensitiveTypeIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setResponsibleSensitiveTypeIds($val);
            },
            'sensitivityLabelId' => fn(ParseNode $n) => $o->setSensitivityLabelId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the responsibleSensitiveTypeIds property value. The sensitive information type GUIDs that caused the recommendation to be given.
     * @return array<string>|null
    */
    public function getResponsibleSensitiveTypeIds(): ?array {
        $val = $this->getBackingStore()->get('responsibleSensitiveTypeIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'responsibleSensitiveTypeIds'");
    }

    /**
     * Gets the sensitivityLabelId property value. The sensitivityLabelId property
     * @return string|null
    */
    public function getSensitivityLabelId(): ?string {
        $val = $this->getBackingStore()->get('sensitivityLabelId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivityLabelId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('actions', $this->getActions());
        $writer->writeEnumValue('actionSource', $this->getActionSource());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('responsibleSensitiveTypeIds', $this->getResponsibleSensitiveTypeIds());
        $writer->writeStringValue('sensitivityLabelId', $this->getSensitivityLabelId());
    }

    /**
     * Sets the actions property value. Actions to take if the label is accepted by the user.
     * @param array<InformationProtectionAction>|null $value Value to set for the actions property.
    */
    public function setActions(?array $value): void {
        $this->getBackingStore()->set('actions', $value);
    }

    /**
     * Sets the actionSource property value. The actionSource property
     * @param ActionSource|null $value Value to set for the actionSource property.
    */
    public function setActionSource(?ActionSource $value): void {
        $this->getBackingStore()->set('actionSource', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the responsibleSensitiveTypeIds property value. The sensitive information type GUIDs that caused the recommendation to be given.
     * @param array<string>|null $value Value to set for the responsibleSensitiveTypeIds property.
    */
    public function setResponsibleSensitiveTypeIds(?array $value): void {
        $this->getBackingStore()->set('responsibleSensitiveTypeIds', $value);
    }

    /**
     * Sets the sensitivityLabelId property value. The sensitivityLabelId property
     * @param string|null $value Value to set for the sensitivityLabelId property.
    */
    public function setSensitivityLabelId(?string $value): void {
        $this->getBackingStore()->set('sensitivityLabelId', $value);
    }

}
