<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AwsPolicyPermissionsDefinitionAction extends AwsPermissionsDefinitionAction implements Parsable 
{
    /**
     * Instantiates a new AwsPolicyPermissionsDefinitionAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.awsPolicyPermissionsDefinitionAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AwsPolicyPermissionsDefinitionAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AwsPolicyPermissionsDefinitionAction {
        return new AwsPolicyPermissionsDefinitionAction();
    }

    /**
     * Gets the assignToRoleId property value. ID for the role.
     * @return string|null
    */
    public function getAssignToRoleId(): ?string {
        $val = $this->getBackingStore()->get('assignToRoleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignToRoleId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignToRoleId' => fn(ParseNode $n) => $o->setAssignToRoleId($n->getStringValue()),
            'policies' => fn(ParseNode $n) => $o->setPolicies($n->getCollectionOfObjectValues([PermissionsDefinitionAwsPolicy::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the policies property value. The policies property
     * @return array<PermissionsDefinitionAwsPolicy>|null
    */
    public function getPolicies(): ?array {
        $val = $this->getBackingStore()->get('policies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PermissionsDefinitionAwsPolicy::class);
            /** @var array<PermissionsDefinitionAwsPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policies'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignToRoleId', $this->getAssignToRoleId());
        $writer->writeCollectionOfObjectValues('policies', $this->getPolicies());
    }

    /**
     * Sets the assignToRoleId property value. ID for the role.
     * @param string|null $value Value to set for the assignToRoleId property.
    */
    public function setAssignToRoleId(?string $value): void {
        $this->getBackingStore()->set('assignToRoleId', $value);
    }

    /**
     * Sets the policies property value. The policies property
     * @param array<PermissionsDefinitionAwsPolicy>|null $value Value to set for the policies property.
    */
    public function setPolicies(?array $value): void {
        $this->getBackingStore()->set('policies', $value);
    }

}
