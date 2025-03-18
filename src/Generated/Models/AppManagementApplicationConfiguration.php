<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppManagementApplicationConfiguration extends AppManagementConfiguration implements Parsable 
{
    /**
     * Instantiates a new AppManagementApplicationConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.appManagementApplicationConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppManagementApplicationConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppManagementApplicationConfiguration {
        return new AppManagementApplicationConfiguration();
    }

    /**
     * Gets the audiences property value. Property to restrict creation or update of apps based on their target signInAudience types.
     * @return AudiencesConfiguration|null
    */
    public function getAudiences(): ?AudiencesConfiguration {
        $val = $this->getBackingStore()->get('audiences');
        if (is_null($val) || $val instanceof AudiencesConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'audiences'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'audiences' => fn(ParseNode $n) => $o->setAudiences($n->getObjectValue([AudiencesConfiguration::class, 'createFromDiscriminatorValue'])),
            'identifierUris' => fn(ParseNode $n) => $o->setIdentifierUris($n->getObjectValue([IdentifierUriConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the identifierUris property value. Configuration object for restrictions on identifierUris property for an application.
     * @return IdentifierUriConfiguration|null
    */
    public function getIdentifierUris(): ?IdentifierUriConfiguration {
        $val = $this->getBackingStore()->get('identifierUris');
        if (is_null($val) || $val instanceof IdentifierUriConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identifierUris'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('audiences', $this->getAudiences());
        $writer->writeObjectValue('identifierUris', $this->getIdentifierUris());
    }

    /**
     * Sets the audiences property value. Property to restrict creation or update of apps based on their target signInAudience types.
     * @param AudiencesConfiguration|null $value Value to set for the audiences property.
    */
    public function setAudiences(?AudiencesConfiguration $value): void {
        $this->getBackingStore()->set('audiences', $value);
    }

    /**
     * Sets the identifierUris property value. Configuration object for restrictions on identifierUris property for an application.
     * @param IdentifierUriConfiguration|null $value Value to set for the identifierUris property.
    */
    public function setIdentifierUris(?IdentifierUriConfiguration $value): void {
        $this->getBackingStore()->set('identifierUris', $value);
    }

}
