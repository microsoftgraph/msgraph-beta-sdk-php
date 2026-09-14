<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Relation extends CaseManagementEntity implements Parsable 
{
    /**
     * Instantiates a new Relation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.caseManagement.relation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Relation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Relation {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.caseManagement.incidentRelation': return new IncidentRelation();
                case '#microsoft.graph.security.caseManagement.recommendationRelation': return new RecommendationRelation();
                case '#microsoft.graph.security.caseManagement.workspaceIndicatorRelation': return new WorkspaceIndicatorRelation();
            }
        }
        return new Relation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'relatedResourceId' => fn(ParseNode $n) => $o->setRelatedResourceId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the relatedResourceId property value. The identifier of the related external resource.
     * @return string|null
    */
    public function getRelatedResourceId(): ?string {
        $val = $this->getBackingStore()->get('relatedResourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relatedResourceId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('relatedResourceId', $this->getRelatedResourceId());
    }

    /**
     * Sets the relatedResourceId property value. The identifier of the related external resource.
     * @param string|null $value Value to set for the relatedResourceId property.
    */
    public function setRelatedResourceId(?string $value): void {
        $this->getBackingStore()->set('relatedResourceId', $value);
    }

}
