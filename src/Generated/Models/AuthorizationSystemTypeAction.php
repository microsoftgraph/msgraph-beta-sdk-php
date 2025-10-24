<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AuthorizationSystemTypeAction extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuthorizationSystemTypeAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthorizationSystemTypeAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthorizationSystemTypeAction {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.awsAuthorizationSystemTypeAction': return new AwsAuthorizationSystemTypeAction();
                case '#microsoft.graph.azureAuthorizationSystemTypeAction': return new AzureAuthorizationSystemTypeAction();
                case '#microsoft.graph.gcpAuthorizationSystemTypeAction': return new GcpAuthorizationSystemTypeAction();
            }
        }
        return new AuthorizationSystemTypeAction();
    }

    /**
     * Gets the actionType property value. The type of action allowed in the authorization system's service. The possible values are: delete, read, unknownFutureValue. Supports $filter and (eq).
     * @return AuthorizationSystemActionType|null
    */
    public function getActionType(): ?AuthorizationSystemActionType {
        $val = $this->getBackingStore()->get('actionType');
        if (is_null($val) || $val instanceof AuthorizationSystemActionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionType'");
    }

    /**
     * Gets the externalId property value. The display name of an action. Read-only. Supports $filter and (eq).
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
            'actionType' => fn(ParseNode $n) => $o->setActionType($n->getEnumValue(AuthorizationSystemActionType::class)),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'resourceTypes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setResourceTypes($val);
            },
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(AuthorizationSystemActionSeverity::class)),
        ]);
    }

    /**
     * Gets the resourceTypes property value. The resource types in the authorization system's service where the action can be performed. Supports $filter and (eq).
     * @return array<string>|null
    */
    public function getResourceTypes(): ?array {
        $val = $this->getBackingStore()->get('resourceTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceTypes'");
    }

    /**
     * Gets the severity property value. The severity property
     * @return AuthorizationSystemActionSeverity|null
    */
    public function getSeverity(): ?AuthorizationSystemActionSeverity {
        $val = $this->getBackingStore()->get('severity');
        if (is_null($val) || $val instanceof AuthorizationSystemActionSeverity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severity'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('actionType', $this->getActionType());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeCollectionOfPrimitiveValues('resourceTypes', $this->getResourceTypes());
        $writer->writeEnumValue('severity', $this->getSeverity());
    }

    /**
     * Sets the actionType property value. The type of action allowed in the authorization system's service. The possible values are: delete, read, unknownFutureValue. Supports $filter and (eq).
     * @param AuthorizationSystemActionType|null $value Value to set for the actionType property.
    */
    public function setActionType(?AuthorizationSystemActionType $value): void {
        $this->getBackingStore()->set('actionType', $value);
    }

    /**
     * Sets the externalId property value. The display name of an action. Read-only. Supports $filter and (eq).
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the resourceTypes property value. The resource types in the authorization system's service where the action can be performed. Supports $filter and (eq).
     * @param array<string>|null $value Value to set for the resourceTypes property.
    */
    public function setResourceTypes(?array $value): void {
        $this->getBackingStore()->set('resourceTypes', $value);
    }

    /**
     * Sets the severity property value. The severity property
     * @param AuthorizationSystemActionSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?AuthorizationSystemActionSeverity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

}
