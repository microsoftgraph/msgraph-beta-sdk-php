<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSynchronizationOAuth2ClientCredentialsConnectionSettings extends EducationSynchronizationConnectionSettings implements Parsable 
{
    /**
     * Instantiates a new educationSynchronizationOAuth2ClientCredentialsConnectionSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationSynchronizationOAuth2ClientCredentialsConnectionSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationSynchronizationOAuth2ClientCredentialsConnectionSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationSynchronizationOAuth2ClientCredentialsConnectionSettings {
        return new EducationSynchronizationOAuth2ClientCredentialsConnectionSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'scope' => fn(ParseNode $n) => $o->setScope($n->getStringValue()),
            'tokenUrl' => fn(ParseNode $n) => $o->setTokenUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the scope property value. The scope of the access request (see RFC6749).
     * @return string|null
    */
    public function getScope(): ?string {
        $val = $this->getBackingStore()->get('scope');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scope'");
    }

    /**
     * Gets the tokenUrl property value. The URL to get access tokens for the data provider.
     * @return string|null
    */
    public function getTokenUrl(): ?string {
        $val = $this->getBackingStore()->get('tokenUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('scope', $this->getScope());
        $writer->writeStringValue('tokenUrl', $this->getTokenUrl());
    }

    /**
     * Sets the scope property value. The scope of the access request (see RFC6749).
     * @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

    /**
     * Sets the tokenUrl property value. The URL to get access tokens for the data provider.
     * @param string|null $value Value to set for the tokenUrl property.
    */
    public function setTokenUrl(?string $value): void {
        $this->getBackingStore()->set('tokenUrl', $value);
    }

}
