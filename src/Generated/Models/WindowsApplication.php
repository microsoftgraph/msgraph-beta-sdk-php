<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsApplication implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $packageSid The package security identifier that Microsoft has assigned the application. Optional. Read-only.
    */
    private ?string $packageSid = null;
    
    /**
     * @var array<string>|null $redirectUris Specifies the URLs where user tokens are sent for sign-in or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent. Only available for applications that support the PersonalMicrosoftAccount signInAudience.
    */
    private ?array $redirectUris = null;
    
    /**
     * Instantiates a new windowsApplication and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsApplication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsApplication {
        return new WindowsApplication();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'packageSid' => function (ParseNode $n) use ($o) { $o->setPackageSid($n->getStringValue()); },
            'redirectUris' => function (ParseNode $n) use ($o) { $o->setRedirectUris($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the packageSid property value. The package security identifier that Microsoft has assigned the application. Optional. Read-only.
     * @return string|null
    */
    public function getPackageSid(): ?string {
        return $this->packageSid;
    }

    /**
     * Gets the redirectUris property value. Specifies the URLs where user tokens are sent for sign-in or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent. Only available for applications that support the PersonalMicrosoftAccount signInAudience.
     * @return array<string>|null
    */
    public function getRedirectUris(): ?array {
        return $this->redirectUris;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('packageSid', $this->packageSid);
        $writer->writeCollectionOfPrimitiveValues('redirectUris', $this->redirectUris);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the packageSid property value. The package security identifier that Microsoft has assigned the application. Optional. Read-only.
     *  @param string|null $value Value to set for the packageSid property.
    */
    public function setPackageSid(?string $value ): void {
        $this->packageSid = $value;
    }

    /**
     * Sets the redirectUris property value. Specifies the URLs where user tokens are sent for sign-in or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent. Only available for applications that support the PersonalMicrosoftAccount signInAudience.
     *  @param array<string>|null $value Value to set for the redirectUris property.
    */
    public function setRedirectUris(?array $value ): void {
        $this->redirectUris = $value;
    }

}
