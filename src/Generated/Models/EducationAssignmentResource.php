<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EducationAssignmentResource extends Entity implements Parsable 
{
    /**
     * Instantiates a new EducationAssignmentResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationAssignmentResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationAssignmentResource {
        return new EducationAssignmentResource();
    }

    /**
     * Gets the dependentResources property value. The dependentResources property
     * @return array<EducationAssignmentResource>|null
    */
    public function getDependentResources(): ?array {
        $val = $this->getBackingStore()->get('dependentResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationAssignmentResource::class);
            /** @var array<EducationAssignmentResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dependentResources'");
    }

    /**
     * Gets the distributeForStudentWork property value. Indicates whether this resource should be copied to each student submission for modification and submission. Required
     * @return bool|null
    */
    public function getDistributeForStudentWork(): ?bool {
        $val = $this->getBackingStore()->get('distributeForStudentWork');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'distributeForStudentWork'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dependentResources' => fn(ParseNode $n) => $o->setDependentResources($n->getCollectionOfObjectValues([EducationAssignmentResource::class, 'createFromDiscriminatorValue'])),
            'distributeForStudentWork' => fn(ParseNode $n) => $o->setDistributeForStudentWork($n->getBooleanValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([EducationResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resource property value. Resource object that has been associated with this assignment.
     * @return EducationResource|null
    */
    public function getResource(): ?EducationResource {
        $val = $this->getBackingStore()->get('resource');
        if (is_null($val) || $val instanceof EducationResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resource'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('dependentResources', $this->getDependentResources());
        $writer->writeBooleanValue('distributeForStudentWork', $this->getDistributeForStudentWork());
        $writer->writeObjectValue('resource', $this->getResource());
    }

    /**
     * Sets the dependentResources property value. The dependentResources property
     * @param array<EducationAssignmentResource>|null $value Value to set for the dependentResources property.
    */
    public function setDependentResources(?array $value): void {
        $this->getBackingStore()->set('dependentResources', $value);
    }

    /**
     * Sets the distributeForStudentWork property value. Indicates whether this resource should be copied to each student submission for modification and submission. Required
     * @param bool|null $value Value to set for the distributeForStudentWork property.
    */
    public function setDistributeForStudentWork(?bool $value): void {
        $this->getBackingStore()->set('distributeForStudentWork', $value);
    }

    /**
     * Sets the resource property value. Resource object that has been associated with this assignment.
     * @param EducationResource|null $value Value to set for the resource property.
    */
    public function setResource(?EducationResource $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

}
