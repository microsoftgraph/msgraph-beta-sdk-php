<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AwsActionsPermissionsDefinitionAction extends AwsPermissionsDefinitionAction implements Parsable 
{
    /**
     * Instantiates a new awsActionsPermissionsDefinitionAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.awsActionsPermissionsDefinitionAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AwsActionsPermissionsDefinitionAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AwsActionsPermissionsDefinitionAction {
        return new AwsActionsPermissionsDefinitionAction();
    }

    /**
     * Gets the assignToRoleId property value. The assignToRoleId property
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
            'statements' => fn(ParseNode $n) => $o->setStatements($n->getCollectionOfObjectValues([AwsStatement::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the statements property value. The statements property
     * @return array<AwsStatement>|null
    */
    public function getStatements(): ?array {
        $val = $this->getBackingStore()->get('statements');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AwsStatement::class);
            /** @var array<AwsStatement>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statements'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignToRoleId', $this->getAssignToRoleId());
        $writer->writeCollectionOfObjectValues('statements', $this->getStatements());
    }

    /**
     * Sets the assignToRoleId property value. The assignToRoleId property
     * @param string|null $value Value to set for the assignToRoleId property.
    */
    public function setAssignToRoleId(?string $value): void {
        $this->getBackingStore()->set('assignToRoleId', $value);
    }

    /**
     * Sets the statements property value. The statements property
     * @param array<AwsStatement>|null $value Value to set for the statements property.
    */
    public function setStatements(?array $value): void {
        $this->getBackingStore()->set('statements', $value);
    }

}
