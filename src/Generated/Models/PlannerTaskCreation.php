<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PlannerTaskCreation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new plannerTaskCreation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerTaskCreation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerTaskCreation {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.plannerExternalTaskSource': return new PlannerExternalTaskSource();
                case '#microsoft.graph.plannerTeamsPublicationInfo': return new PlannerTeamsPublicationInfo();
            }
        }
        return new PlannerTaskCreation();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the creationSourceKind property value. Specifies what kind of creation source the task is created with. The possible values are: external, publication and unknownFutureValue.
     * @return PlannerTaskCreation_creationSourceKind|null
    */
    public function getCreationSourceKind(): ?PlannerTaskCreation_creationSourceKind {
        $val = $this->getBackingStore()->get('creationSourceKind');
        if (is_null($val) || $val instanceof PlannerTaskCreation_creationSourceKind) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationSourceKind'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'creationSourceKind' => fn(ParseNode $n) => $o->setCreationSourceKind($n->getEnumValue(PlannerTaskCreation_creationSourceKind::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'teamsPublicationInfo' => fn(ParseNode $n) => $o->setTeamsPublicationInfo($n->getObjectValue([PlannerTeamsPublicationInfo::class, 'createFromDiscriminatorValue'])),
        ];
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
     * Gets the teamsPublicationInfo property value. Information about the publication process that created this task. This field is deprecated and clients should move to using the new inheritance model.
     * @return PlannerTeamsPublicationInfo|null
    */
    public function getTeamsPublicationInfo(): ?PlannerTeamsPublicationInfo {
        $val = $this->getBackingStore()->get('teamsPublicationInfo');
        if (is_null($val) || $val instanceof PlannerTeamsPublicationInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsPublicationInfo'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('creationSourceKind', $this->getCreationSourceKind());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('teamsPublicationInfo', $this->getTeamsPublicationInfo());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the creationSourceKind property value. Specifies what kind of creation source the task is created with. The possible values are: external, publication and unknownFutureValue.
     * @param PlannerTaskCreation_creationSourceKind|null $value Value to set for the creationSourceKind property.
    */
    public function setCreationSourceKind(?PlannerTaskCreation_creationSourceKind $value): void {
        $this->getBackingStore()->set('creationSourceKind', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the teamsPublicationInfo property value. Information about the publication process that created this task. This field is deprecated and clients should move to using the new inheritance model.
     * @param PlannerTeamsPublicationInfo|null $value Value to set for the teamsPublicationInfo property.
    */
    public function setTeamsPublicationInfo(?PlannerTeamsPublicationInfo $value): void {
        $this->getBackingStore()->set('teamsPublicationInfo', $value);
    }

}
