<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents a container that exposes navigation properties for employee experience resources.
*/
class EmployeeExperience extends Entity implements Parsable 
{
    /**
     * Instantiates a new EmployeeExperience and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmployeeExperience
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmployeeExperience {
        return new EmployeeExperience();
    }

    /**
     * Gets the communities property value. A collection of communities in Viva Engage.
     * @return array<Community>|null
    */
    public function getCommunities(): ?array {
        $val = $this->getBackingStore()->get('communities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Community::class);
            /** @var array<Community>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'communities'");
    }

    /**
     * Gets the engagementAsyncOperations property value. A collection of long-running, asynchronous operations related to Viva Engage.
     * @return array<EngagementAsyncOperation>|null
    */
    public function getEngagementAsyncOperations(): ?array {
        $val = $this->getBackingStore()->get('engagementAsyncOperations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EngagementAsyncOperation::class);
            /** @var array<EngagementAsyncOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'engagementAsyncOperations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'communities' => fn(ParseNode $n) => $o->setCommunities($n->getCollectionOfObjectValues([Community::class, 'createFromDiscriminatorValue'])),
            'engagementAsyncOperations' => fn(ParseNode $n) => $o->setEngagementAsyncOperations($n->getCollectionOfObjectValues([EngagementAsyncOperation::class, 'createFromDiscriminatorValue'])),
            'goals' => fn(ParseNode $n) => $o->setGoals($n->getObjectValue([Goals::class, 'createFromDiscriminatorValue'])),
            'learningCourseActivities' => fn(ParseNode $n) => $o->setLearningCourseActivities($n->getCollectionOfObjectValues([LearningCourseActivity::class, 'createFromDiscriminatorValue'])),
            'learningProviders' => fn(ParseNode $n) => $o->setLearningProviders($n->getCollectionOfObjectValues([LearningProvider::class, 'createFromDiscriminatorValue'])),
            'roles' => fn(ParseNode $n) => $o->setRoles($n->getCollectionOfObjectValues([EngagementRole::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the goals property value. Represents a collection of goals in a Viva Goals organization.
     * @return Goals|null
    */
    public function getGoals(): ?Goals {
        $val = $this->getBackingStore()->get('goals');
        if (is_null($val) || $val instanceof Goals) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'goals'");
    }

    /**
     * Gets the learningCourseActivities property value. The learningCourseActivities property
     * @return array<LearningCourseActivity>|null
    */
    public function getLearningCourseActivities(): ?array {
        $val = $this->getBackingStore()->get('learningCourseActivities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LearningCourseActivity::class);
            /** @var array<LearningCourseActivity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'learningCourseActivities'");
    }

    /**
     * Gets the learningProviders property value. A collection of learning providers.
     * @return array<LearningProvider>|null
    */
    public function getLearningProviders(): ?array {
        $val = $this->getBackingStore()->get('learningProviders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LearningProvider::class);
            /** @var array<LearningProvider>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'learningProviders'");
    }

    /**
     * Gets the roles property value. A collection of roles in Viva Engage.
     * @return array<EngagementRole>|null
    */
    public function getRoles(): ?array {
        $val = $this->getBackingStore()->get('roles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EngagementRole::class);
            /** @var array<EngagementRole>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roles'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('communities', $this->getCommunities());
        $writer->writeCollectionOfObjectValues('engagementAsyncOperations', $this->getEngagementAsyncOperations());
        $writer->writeObjectValue('goals', $this->getGoals());
        $writer->writeCollectionOfObjectValues('learningCourseActivities', $this->getLearningCourseActivities());
        $writer->writeCollectionOfObjectValues('learningProviders', $this->getLearningProviders());
        $writer->writeCollectionOfObjectValues('roles', $this->getRoles());
    }

    /**
     * Sets the communities property value. A collection of communities in Viva Engage.
     * @param array<Community>|null $value Value to set for the communities property.
    */
    public function setCommunities(?array $value): void {
        $this->getBackingStore()->set('communities', $value);
    }

    /**
     * Sets the engagementAsyncOperations property value. A collection of long-running, asynchronous operations related to Viva Engage.
     * @param array<EngagementAsyncOperation>|null $value Value to set for the engagementAsyncOperations property.
    */
    public function setEngagementAsyncOperations(?array $value): void {
        $this->getBackingStore()->set('engagementAsyncOperations', $value);
    }

    /**
     * Sets the goals property value. Represents a collection of goals in a Viva Goals organization.
     * @param Goals|null $value Value to set for the goals property.
    */
    public function setGoals(?Goals $value): void {
        $this->getBackingStore()->set('goals', $value);
    }

    /**
     * Sets the learningCourseActivities property value. The learningCourseActivities property
     * @param array<LearningCourseActivity>|null $value Value to set for the learningCourseActivities property.
    */
    public function setLearningCourseActivities(?array $value): void {
        $this->getBackingStore()->set('learningCourseActivities', $value);
    }

    /**
     * Sets the learningProviders property value. A collection of learning providers.
     * @param array<LearningProvider>|null $value Value to set for the learningProviders property.
    */
    public function setLearningProviders(?array $value): void {
        $this->getBackingStore()->set('learningProviders', $value);
    }

    /**
     * Sets the roles property value. A collection of roles in Viva Engage.
     * @param array<EngagementRole>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value): void {
        $this->getBackingStore()->set('roles', $value);
    }

}
