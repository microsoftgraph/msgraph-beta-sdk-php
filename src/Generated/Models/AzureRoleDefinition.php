<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AzureRoleDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new AzureRoleDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureRoleDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureRoleDefinition {
        return new AzureRoleDefinition();
    }

    /**
     * Gets the assignableScopes property value. Scopes at which the Azure role can be assigned. For more information about common patterns, see Understand Azure role definitions: AssignableScopes. Supports $filter (eq).
     * @return array<string>|null
    */
    public function getAssignableScopes(): ?array {
        $val = $this->getBackingStore()->get('assignableScopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignableScopes'");
    }

    /**
     * Gets the azureRoleDefinitionType property value. The azureRoleDefinitionType property
     * @return AzureRoleDefinitionType|null
    */
    public function getAzureRoleDefinitionType(): ?AzureRoleDefinitionType {
        $val = $this->getBackingStore()->get('azureRoleDefinitionType');
        if (is_null($val) || $val instanceof AzureRoleDefinitionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureRoleDefinitionType'");
    }

    /**
     * Gets the displayName property value. Name of the Azure role. Supports $filter (eq, contains).
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the externalId property value. Identifier of an Azure role defined by Microsoft Azure. Alternate key. Supports $filter (eq).
     * @return string|null
    */
    public function getExternalId(): ?string {
        $val = $this->getBackingStore()->get('externalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignableScopes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAssignableScopes($val);
            },
            'azureRoleDefinitionType' => fn(ParseNode $n) => $o->setAzureRoleDefinitionType($n->getEnumValue(AzureRoleDefinitionType::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('assignableScopes', $this->getAssignableScopes());
        $writer->writeEnumValue('azureRoleDefinitionType', $this->getAzureRoleDefinitionType());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('externalId', $this->getExternalId());
    }

    /**
     * Sets the assignableScopes property value. Scopes at which the Azure role can be assigned. For more information about common patterns, see Understand Azure role definitions: AssignableScopes. Supports $filter (eq).
     * @param array<string>|null $value Value to set for the assignableScopes property.
    */
    public function setAssignableScopes(?array $value): void {
        $this->getBackingStore()->set('assignableScopes', $value);
    }

    /**
     * Sets the azureRoleDefinitionType property value. The azureRoleDefinitionType property
     * @param AzureRoleDefinitionType|null $value Value to set for the azureRoleDefinitionType property.
    */
    public function setAzureRoleDefinitionType(?AzureRoleDefinitionType $value): void {
        $this->getBackingStore()->set('azureRoleDefinitionType', $value);
    }

    /**
     * Sets the displayName property value. Name of the Azure role. Supports $filter (eq, contains).
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalId property value. Identifier of an Azure role defined by Microsoft Azure. Alternate key. Supports $filter (eq).
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

}
