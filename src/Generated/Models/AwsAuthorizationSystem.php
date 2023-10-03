<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AwsAuthorizationSystem extends AuthorizationSystem implements Parsable 
{
    /**
     * Instantiates a new awsAuthorizationSystem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.awsAuthorizationSystem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AwsAuthorizationSystem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AwsAuthorizationSystem {
        return new AwsAuthorizationSystem();
    }

    /**
     * Gets the actions property value. The actions property
     * @return array<AwsAuthorizationSystemTypeAction>|null
    */
    public function getActions(): ?array {
        $val = $this->getBackingStore()->get('actions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AwsAuthorizationSystemTypeAction::class);
            /** @var array<AwsAuthorizationSystemTypeAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actions'");
    }

    /**
     * Gets the associatedIdentities property value. The associatedIdentities property
     * @return AwsAssociatedIdentities|null
    */
    public function getAssociatedIdentities(): ?AwsAssociatedIdentities {
        $val = $this->getBackingStore()->get('associatedIdentities');
        if (is_null($val) || $val instanceof AwsAssociatedIdentities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'associatedIdentities'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actions' => fn(ParseNode $n) => $o->setActions($n->getCollectionOfObjectValues([AwsAuthorizationSystemTypeAction::class, 'createFromDiscriminatorValue'])),
            'associatedIdentities' => fn(ParseNode $n) => $o->setAssociatedIdentities($n->getObjectValue([AwsAssociatedIdentities::class, 'createFromDiscriminatorValue'])),
            'policies' => fn(ParseNode $n) => $o->setPolicies($n->getCollectionOfObjectValues([AwsPolicy::class, 'createFromDiscriminatorValue'])),
            'resources' => fn(ParseNode $n) => $o->setResources($n->getCollectionOfObjectValues([AwsAuthorizationSystemResource::class, 'createFromDiscriminatorValue'])),
            'services' => fn(ParseNode $n) => $o->setServices($n->getCollectionOfObjectValues([AuthorizationSystemTypeService::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the policies property value. The policies property
     * @return array<AwsPolicy>|null
    */
    public function getPolicies(): ?array {
        $val = $this->getBackingStore()->get('policies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AwsPolicy::class);
            /** @var array<AwsPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policies'");
    }

    /**
     * Gets the resources property value. The resources property
     * @return array<AwsAuthorizationSystemResource>|null
    */
    public function getResources(): ?array {
        $val = $this->getBackingStore()->get('resources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AwsAuthorizationSystemResource::class);
            /** @var array<AwsAuthorizationSystemResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resources'");
    }

    /**
     * Gets the services property value. The services property
     * @return array<AuthorizationSystemTypeService>|null
    */
    public function getServices(): ?array {
        $val = $this->getBackingStore()->get('services');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthorizationSystemTypeService::class);
            /** @var array<AuthorizationSystemTypeService>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'services'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('actions', $this->getActions());
        $writer->writeObjectValue('associatedIdentities', $this->getAssociatedIdentities());
        $writer->writeCollectionOfObjectValues('policies', $this->getPolicies());
        $writer->writeCollectionOfObjectValues('resources', $this->getResources());
        $writer->writeCollectionOfObjectValues('services', $this->getServices());
    }

    /**
     * Sets the actions property value. The actions property
     * @param array<AwsAuthorizationSystemTypeAction>|null $value Value to set for the actions property.
    */
    public function setActions(?array $value): void {
        $this->getBackingStore()->set('actions', $value);
    }

    /**
     * Sets the associatedIdentities property value. The associatedIdentities property
     * @param AwsAssociatedIdentities|null $value Value to set for the associatedIdentities property.
    */
    public function setAssociatedIdentities(?AwsAssociatedIdentities $value): void {
        $this->getBackingStore()->set('associatedIdentities', $value);
    }

    /**
     * Sets the policies property value. The policies property
     * @param array<AwsPolicy>|null $value Value to set for the policies property.
    */
    public function setPolicies(?array $value): void {
        $this->getBackingStore()->set('policies', $value);
    }

    /**
     * Sets the resources property value. The resources property
     * @param array<AwsAuthorizationSystemResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value): void {
        $this->getBackingStore()->set('resources', $value);
    }

    /**
     * Sets the services property value. The services property
     * @param array<AuthorizationSystemTypeService>|null $value Value to set for the services property.
    */
    public function setServices(?array $value): void {
        $this->getBackingStore()->set('services', $value);
    }

}
