<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PlannerExternalTaskSource extends PlannerTaskCreation implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new plannerExternalTaskSource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.plannerExternalTaskSource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerExternalTaskSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerExternalTaskSource {
        return new PlannerExternalTaskSource();
    }

    /**
     * Gets the contextScenarioId property value. Nullable. An identifier for the scenario associated with this external source. This should be in reverse DNS format. For example, Contoso company owned application for customer support would have a value like 'com.constoso.customerSupport'.
     * @return string|null
    */
    public function getContextScenarioId(): ?string {
        $val = $this->getBackingStore()->get('contextScenarioId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contextScenarioId'");
    }

    /**
     * Gets the displayLinkType property value. Specifies how an application should display the link to the associated plannerExternalTaskSource. The possible values are: none, default.
     * @return PlannerExternalTaskSourceDisplayType|null
    */
    public function getDisplayLinkType(): ?PlannerExternalTaskSourceDisplayType {
        $val = $this->getBackingStore()->get('displayLinkType');
        if (is_null($val) || $val instanceof PlannerExternalTaskSourceDisplayType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayLinkType'");
    }

    /**
     * Gets the displayNameSegments property value. The segments of the name of the external experience. Segments represent a hierarchical structure that allows other apps to display the relationship.
     * @return array<string>|null
    */
    public function getDisplayNameSegments(): ?array {
        $val = $this->getBackingStore()->get('displayNameSegments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayNameSegments'");
    }

    /**
     * Gets the externalContextId property value. Nullable. The id of the external entity's containing entity or context.
     * @return string|null
    */
    public function getExternalContextId(): ?string {
        $val = $this->getBackingStore()->get('externalContextId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalContextId'");
    }

    /**
     * Gets the externalObjectId property value. Nullable. The id of the entity that an external service associates with a task.
     * @return string|null
    */
    public function getExternalObjectId(): ?string {
        $val = $this->getBackingStore()->get('externalObjectId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalObjectId'");
    }

    /**
     * Gets the externalObjectVersion property value. Nullable. The external Item Version for the object specified by the externalObjectId.
     * @return string|null
    */
    public function getExternalObjectVersion(): ?string {
        $val = $this->getBackingStore()->get('externalObjectVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalObjectVersion'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contextScenarioId' => fn(ParseNode $n) => $o->setContextScenarioId($n->getStringValue()),
            'displayLinkType' => fn(ParseNode $n) => $o->setDisplayLinkType($n->getEnumValue(PlannerExternalTaskSourceDisplayType::class)),
            'displayNameSegments' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDisplayNameSegments($val);
            },
            'externalContextId' => fn(ParseNode $n) => $o->setExternalContextId($n->getStringValue()),
            'externalObjectId' => fn(ParseNode $n) => $o->setExternalObjectId($n->getStringValue()),
            'externalObjectVersion' => fn(ParseNode $n) => $o->setExternalObjectVersion($n->getStringValue()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the webUrl property value. Nullable. URL of the user experience represented by the associated plannerExternalTaskSource.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        $val = $this->getBackingStore()->get('webUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('contextScenarioId', $this->getContextScenarioId());
        $writer->writeEnumValue('displayLinkType', $this->getDisplayLinkType());
        $writer->writeCollectionOfPrimitiveValues('displayNameSegments', $this->getDisplayNameSegments());
        $writer->writeStringValue('externalContextId', $this->getExternalContextId());
        $writer->writeStringValue('externalObjectId', $this->getExternalObjectId());
        $writer->writeStringValue('externalObjectVersion', $this->getExternalObjectVersion());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the contextScenarioId property value. Nullable. An identifier for the scenario associated with this external source. This should be in reverse DNS format. For example, Contoso company owned application for customer support would have a value like 'com.constoso.customerSupport'.
     * @param string|null $value Value to set for the contextScenarioId property.
    */
    public function setContextScenarioId(?string $value): void {
        $this->getBackingStore()->set('contextScenarioId', $value);
    }

    /**
     * Sets the displayLinkType property value. Specifies how an application should display the link to the associated plannerExternalTaskSource. The possible values are: none, default.
     * @param PlannerExternalTaskSourceDisplayType|null $value Value to set for the displayLinkType property.
    */
    public function setDisplayLinkType(?PlannerExternalTaskSourceDisplayType $value): void {
        $this->getBackingStore()->set('displayLinkType', $value);
    }

    /**
     * Sets the displayNameSegments property value. The segments of the name of the external experience. Segments represent a hierarchical structure that allows other apps to display the relationship.
     * @param array<string>|null $value Value to set for the displayNameSegments property.
    */
    public function setDisplayNameSegments(?array $value): void {
        $this->getBackingStore()->set('displayNameSegments', $value);
    }

    /**
     * Sets the externalContextId property value. Nullable. The id of the external entity's containing entity or context.
     * @param string|null $value Value to set for the externalContextId property.
    */
    public function setExternalContextId(?string $value): void {
        $this->getBackingStore()->set('externalContextId', $value);
    }

    /**
     * Sets the externalObjectId property value. Nullable. The id of the entity that an external service associates with a task.
     * @param string|null $value Value to set for the externalObjectId property.
    */
    public function setExternalObjectId(?string $value): void {
        $this->getBackingStore()->set('externalObjectId', $value);
    }

    /**
     * Sets the externalObjectVersion property value. Nullable. The external Item Version for the object specified by the externalObjectId.
     * @param string|null $value Value to set for the externalObjectVersion property.
    */
    public function setExternalObjectVersion(?string $value): void {
        $this->getBackingStore()->set('externalObjectVersion', $value);
    }

    /**
     * Sets the webUrl property value. Nullable. URL of the user experience represented by the associated plannerExternalTaskSource.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
