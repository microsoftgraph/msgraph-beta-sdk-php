<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes a relationship between two mobile apps.
*/
class MobileAppRelationship extends Entity implements Parsable 
{
    /**
     * Instantiates a new MobileAppRelationship and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppRelationship
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppRelationship {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.mobileAppDependency': return new MobileAppDependency();
                case '#microsoft.graph.mobileAppSupersedence': return new MobileAppSupersedence();
            }
        }
        return new MobileAppRelationship();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'sourceDisplayName' => fn(ParseNode $n) => $o->setSourceDisplayName($n->getStringValue()),
            'sourceDisplayVersion' => fn(ParseNode $n) => $o->setSourceDisplayVersion($n->getStringValue()),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'sourcePublisherDisplayName' => fn(ParseNode $n) => $o->setSourcePublisherDisplayName($n->getStringValue()),
            'targetDisplayName' => fn(ParseNode $n) => $o->setTargetDisplayName($n->getStringValue()),
            'targetDisplayVersion' => fn(ParseNode $n) => $o->setTargetDisplayVersion($n->getStringValue()),
            'targetId' => fn(ParseNode $n) => $o->setTargetId($n->getStringValue()),
            'targetPublisher' => fn(ParseNode $n) => $o->setTargetPublisher($n->getStringValue()),
            'targetPublisherDisplayName' => fn(ParseNode $n) => $o->setTargetPublisherDisplayName($n->getStringValue()),
            'targetType' => fn(ParseNode $n) => $o->setTargetType($n->getEnumValue(MobileAppRelationshipType::class)),
        ]);
    }

    /**
     * Gets the sourceDisplayName property value. The display name of the app that is the source of the mobile app relationship entity. For example: Orca. Maximum length is 500 characters. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     * @return string|null
    */
    public function getSourceDisplayName(): ?string {
        $val = $this->getBackingStore()->get('sourceDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceDisplayName'");
    }

    /**
     * Gets the sourceDisplayVersion property value. The display version of the app that is the source of the mobile app relationship entity. For example 1.0.12 or 1.2203.156 or 3. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     * @return string|null
    */
    public function getSourceDisplayVersion(): ?string {
        $val = $this->getBackingStore()->get('sourceDisplayVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceDisplayVersion'");
    }

    /**
     * Gets the sourceId property value. The unique app identifier of the source of the mobile app relationship entity. For example: 2dbc75b9-e993-4e4d-a071-91ac5a218672. If null during relationship creation, then it will be populated with parent Id. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     * @return string|null
    */
    public function getSourceId(): ?string {
        $val = $this->getBackingStore()->get('sourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceId'");
    }

    /**
     * Gets the sourcePublisherDisplayName property value. The publisher display name of the app that is the source of the mobile app relationship entity. For example: Fabrikam. Maximum length is 500 characters. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     * @return string|null
    */
    public function getSourcePublisherDisplayName(): ?string {
        $val = $this->getBackingStore()->get('sourcePublisherDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourcePublisherDisplayName'");
    }

    /**
     * Gets the targetDisplayName property value. The display name of the app that is the target of the mobile app relationship entity. For example: Firefox Setup 52.0.2 32bit.intunewin. Maximum length is 500 characters. Read-Only. Returned by default. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     * @return string|null
    */
    public function getTargetDisplayName(): ?string {
        $val = $this->getBackingStore()->get('targetDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetDisplayName'");
    }

    /**
     * Gets the targetDisplayVersion property value. The display version of the app that is the target of the mobile app relationship entity. For example 1.0 or 1.2203.156. Read-Only. Returned by default. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     * @return string|null
    */
    public function getTargetDisplayVersion(): ?string {
        $val = $this->getBackingStore()->get('targetDisplayVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetDisplayVersion'");
    }

    /**
     * Gets the targetId property value. The unique app identifier of the target of the mobile app relationship entity. For example: 2dbc75b9-e993-4e4d-a071-91ac5a218672. Read-Only. Returned by default. Supports: $select. Does not support $search, $filter, $orderBy.
     * @return string|null
    */
    public function getTargetId(): ?string {
        $val = $this->getBackingStore()->get('targetId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetId'");
    }

    /**
     * Gets the targetPublisher property value. The publisher of the app that is the target of the mobile app relationship entity. For example: Fabrikam. Maximum length is 500 characters. Read-Only. Returned by default. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     * @return string|null
    */
    public function getTargetPublisher(): ?string {
        $val = $this->getBackingStore()->get('targetPublisher');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetPublisher'");
    }

    /**
     * Gets the targetPublisherDisplayName property value. The publisher display name of the app that is the target of the mobile app relationship entity. For example: Fabrikam. Maximum length is 500 characters. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     * @return string|null
    */
    public function getTargetPublisherDisplayName(): ?string {
        $val = $this->getBackingStore()->get('targetPublisherDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetPublisherDisplayName'");
    }

    /**
     * Gets the targetType property value. Indicates whether the target of a relationship is the parent or the child in the relationship.
     * @return MobileAppRelationshipType|null
    */
    public function getTargetType(): ?MobileAppRelationshipType {
        $val = $this->getBackingStore()->get('targetType');
        if (is_null($val) || $val instanceof MobileAppRelationshipType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('targetId', $this->getTargetId());
        $writer->writeEnumValue('targetType', $this->getTargetType());
    }

    /**
     * Sets the sourceDisplayName property value. The display name of the app that is the source of the mobile app relationship entity. For example: Orca. Maximum length is 500 characters. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     * @param string|null $value Value to set for the sourceDisplayName property.
    */
    public function setSourceDisplayName(?string $value): void {
        $this->getBackingStore()->set('sourceDisplayName', $value);
    }

    /**
     * Sets the sourceDisplayVersion property value. The display version of the app that is the source of the mobile app relationship entity. For example 1.0.12 or 1.2203.156 or 3. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     * @param string|null $value Value to set for the sourceDisplayVersion property.
    */
    public function setSourceDisplayVersion(?string $value): void {
        $this->getBackingStore()->set('sourceDisplayVersion', $value);
    }

    /**
     * Sets the sourceId property value. The unique app identifier of the source of the mobile app relationship entity. For example: 2dbc75b9-e993-4e4d-a071-91ac5a218672. If null during relationship creation, then it will be populated with parent Id. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->getBackingStore()->set('sourceId', $value);
    }

    /**
     * Sets the sourcePublisherDisplayName property value. The publisher display name of the app that is the source of the mobile app relationship entity. For example: Fabrikam. Maximum length is 500 characters. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     * @param string|null $value Value to set for the sourcePublisherDisplayName property.
    */
    public function setSourcePublisherDisplayName(?string $value): void {
        $this->getBackingStore()->set('sourcePublisherDisplayName', $value);
    }

    /**
     * Sets the targetDisplayName property value. The display name of the app that is the target of the mobile app relationship entity. For example: Firefox Setup 52.0.2 32bit.intunewin. Maximum length is 500 characters. Read-Only. Returned by default. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     * @param string|null $value Value to set for the targetDisplayName property.
    */
    public function setTargetDisplayName(?string $value): void {
        $this->getBackingStore()->set('targetDisplayName', $value);
    }

    /**
     * Sets the targetDisplayVersion property value. The display version of the app that is the target of the mobile app relationship entity. For example 1.0 or 1.2203.156. Read-Only. Returned by default. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     * @param string|null $value Value to set for the targetDisplayVersion property.
    */
    public function setTargetDisplayVersion(?string $value): void {
        $this->getBackingStore()->set('targetDisplayVersion', $value);
    }

    /**
     * Sets the targetId property value. The unique app identifier of the target of the mobile app relationship entity. For example: 2dbc75b9-e993-4e4d-a071-91ac5a218672. Read-Only. Returned by default. Supports: $select. Does not support $search, $filter, $orderBy.
     * @param string|null $value Value to set for the targetId property.
    */
    public function setTargetId(?string $value): void {
        $this->getBackingStore()->set('targetId', $value);
    }

    /**
     * Sets the targetPublisher property value. The publisher of the app that is the target of the mobile app relationship entity. For example: Fabrikam. Maximum length is 500 characters. Read-Only. Returned by default. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     * @param string|null $value Value to set for the targetPublisher property.
    */
    public function setTargetPublisher(?string $value): void {
        $this->getBackingStore()->set('targetPublisher', $value);
    }

    /**
     * Sets the targetPublisherDisplayName property value. The publisher display name of the app that is the target of the mobile app relationship entity. For example: Fabrikam. Maximum length is 500 characters. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     * @param string|null $value Value to set for the targetPublisherDisplayName property.
    */
    public function setTargetPublisherDisplayName(?string $value): void {
        $this->getBackingStore()->set('targetPublisherDisplayName', $value);
    }

    /**
     * Sets the targetType property value. Indicates whether the target of a relationship is the parent or the child in the relationship.
     * @param MobileAppRelationshipType|null $value Value to set for the targetType property.
    */
    public function setTargetType(?MobileAppRelationshipType $value): void {
        $this->getBackingStore()->set('targetType', $value);
    }

}
