<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSynchronizationOAuth2ClientCredentialsConnectionSettings extends EducationSynchronizationConnectionSettings implements Parsable 
{
    /**
     * @var string|null $scope The scope of the access request (see RFC6749).
    */
    private ?string $scope = null;
    
    /**
     * @var string|null $tokenUrl The URL to get access tokens for the data provider.
    */
    private ?string $tokenUrl = null;
    
    /**
     * Instantiates a new EducationSynchronizationOAuth2ClientCredentialsConnectionSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'scope' => function (ParseNode $n) use ($o) { $o->setScope($n->getStringValue()); },
            'tokenUrl' => function (ParseNode $n) use ($o) { $o->setTokenUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the scope property value. The scope of the access request (see RFC6749).
     * @return string|null
    */
    public function getScope(): ?string {
        return $this->scope;
    }

    /**
     * Gets the tokenUrl property value. The URL to get access tokens for the data provider.
     * @return string|null
    */
    public function getTokenUrl(): ?string {
        return $this->tokenUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('scope', $this->scope);
        $writer->writeStringValue('tokenUrl', $this->tokenUrl);
    }

    /**
     * Sets the scope property value. The scope of the access request (see RFC6749).
     *  @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value ): void {
        $this->scope = $value;
    }

    /**
     * Sets the tokenUrl property value. The URL to get access tokens for the data provider.
     *  @param string|null $value Value to set for the tokenUrl property.
    */
    public function setTokenUrl(?string $value ): void {
        $this->tokenUrl = $value;
    }

}
