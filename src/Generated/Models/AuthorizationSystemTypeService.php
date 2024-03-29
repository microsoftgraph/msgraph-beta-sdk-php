<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AuthorizationSystemTypeService extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuthorizationSystemTypeService and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthorizationSystemTypeService
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthorizationSystemTypeService {
        return new AuthorizationSystemTypeService();
    }

    /**
     * Gets the actions property value. List of actions for the service in an authorization system that is onboarded to Permissions Management.
     * @return array<AuthorizationSystemTypeAction>|null
    */
    public function getActions(): ?array {
        $val = $this->getBackingStore()->get('actions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthorizationSystemTypeAction::class);
            /** @var array<AuthorizationSystemTypeAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actions' => fn(ParseNode $n) => $o->setActions($n->getCollectionOfObjectValues([AuthorizationSystemTypeAction::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('actions', $this->getActions());
    }

    /**
     * Sets the actions property value. List of actions for the service in an authorization system that is onboarded to Permissions Management.
     * @param array<AuthorizationSystemTypeAction>|null $value Value to set for the actions property.
    */
    public function setActions(?array $value): void {
        $this->getBackingStore()->set('actions', $value);
    }

}
